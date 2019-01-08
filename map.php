<!doctype html>
<html>
    <head>
        <meta charset='utf-8'/>
        <title>Google Maps</title>
        <script src='https://maps.google.com/maps/api/js' type='text/javascript'></script>
        <script type='text/javascript'>
            (function(){

                var map,marker,latlng;
                /* initial locations for map */
                var _lat=56;
                var _lng=-2;

                function showMap(){
                    /* set the default initial location */
                    latlng={ lat: _lat, lng: _lng };

                    /* invoke the map */
                    map = new google.maps.Map( document.getElementById('map'), {
                       center:latlng,
                       zoom: 20
                    });

                    /* show the initial marker */
                    marker = new google.maps.Marker({
                       position:latlng,
                       map: map,
                       title: 'Hello World!'
                    });


                    /* I think you can use the jQuery like this within the showMap function? */
                    $.ajax({
                        url: 'phpmobile/getlanglong.php',
                        data: { "id": getacara },
                        dataType: 'json',
                        success: function( data, status ){
                            $.each( data, function( i,item ){

                                /* add a marker for each location in response data */
                                addMarker( item.latitude, item.longitude, 'A title ~ could be returned in json data' );
                            });
                        },
                        error: function(){
                            output.text('There was an error loading the data.');
                        }
                    });
                }

                /* simple function just to add a new marker */
                function addMarker(lat,lng,title){
                    marker = new google.maps.Marker({
                       position:{lat:lat,lng:lng},
                       map: map,
                       title: title
                    });
                }

                document.addEventListener( 'DOMContentLoaded', showMap, false );
            }());
        </script>
    </head>
    <body>
        <div id='map' style='width:600px;height:400px'></div>
    </body>
</html>
One thing I found when finally trying the code was, as you mentioned, there was an error relating to not a number so I made a small change by using parseFloat to ensure the latlng object literal was getting numbers and not strings. Below is a fully tested and working example of the whole page ~ it is an all-in-one page for testing purposes and of course the db details and table lookups are not going to work directly for you without editing.

edit
<?php
    if( $_SERVER['REQUEST_METHOD']=='GET' && isset( $_GET['ajax'] ) ){

        $dbhost =   'localhost';
        $dbuser =   'root';
        $dbpwd  =   'xx';
        $dbname =   'xxx';
        $db     =   new mysqli( $dbhost, $dbuser, $dbpwd, $dbname );

        $places=array();

        $sql    =   'select
                        `location_name` as \'name\',
                        `location_Latitude` as \'lat\',
                        `location_Longitude` as \'lng\'
                        from `maps`
                        limit 100';

        $res    =   $db->query( $sql );
        if( $res ) while( $rs=$res->fetch_object() ) $places[]=array( 'latitude'=>$rs->lat, 'longitude'=>$rs->lng, 'name'=>$rs->name );
        $db->close();

        header( 'Content-Type: application/json' );
        echo json_encode( $places,JSON_FORCE_OBJECT );
        exit();
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset='utf-8'/>
        <title>Google Maps</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src='https://maps.google.com/maps/api/js' type='text/javascript'></script>
        <script type='text/javascript'>
            (function(){

                var map,marker,latlng,bounds,infowin;
                /* initial locations for map */
                var _lat=56.61543329027024;
                var _lng=-2.9266123065796137;

                var getacara=0; /* What should this be? is it a function, a variable ???*/

                function showMap(){
                    /* set the default initial location */
                    latlng={ lat: _lat, lng: _lng };

                    bounds = new google.maps.LatLngBounds();
                    infowin = new google.maps.InfoWindow();

                    /* invoke the map */
                    map = new google.maps.Map( document.getElementById('map'), {
                       center:latlng,
                       zoom: 10
                    });

                    /* show the initial marker */
                    marker = new google.maps.Marker({
                       position:latlng,
                       map: map,
                       title: 'Hello World!'
                    });
                    bounds.extend( marker.position );


                    /* I think you can use the jQuery like this within the showMap function? */
                    $.ajax({
                        /*
                            I'm using the same page for the db results but you would
                            change the below to point to your php script ~ namely
                            phpmobile/getlanglong.php
                        */
                        url: document.location.href,/*'phpmobile/getlanglong.php'*/
                        data: { 'id': getacara, 'ajax':true },
                        dataType: 'json',
                        success: function( data, status ){
                            $.each( data, function( i,item ){
                                /* add a marker for each location in response data */
                                addMarker( item.latitude, item.longitude, item.name );
                            });
                        },
                        error: function(){
                            output.text('There was an error loading the data.');
                        }
                    });
                }

                /* simple function just to add a new marker */
                function addMarker(lat,lng,title){
                    marker = new google.maps.Marker({/* Cast the returned data as floats using parseFloat() */
                       position:{ lat:parseFloat( lat ), lng:parseFloat( lng ) },
                       map:map,
                       title:title
                    });

                    google.maps.event.addListener( marker, 'click', function(event){
                        infowin.setContent(this.title);
                        infowin.open(map,this);
                        infowin.setPosition(this.position);
                    }.bind( marker ));

                    bounds.extend( marker.position );
                    map.fitBounds( bounds );
                }


                document.addEventListener( 'DOMContentLoaded', showMap, false );
            }());
        </script>
        <style>
            html, html body, #map{ height:100%; width:100%; padding:0; margin:0; }
        </style>
    </head>
    <body>
        <div id='map'></div>
    </body>
</html>
