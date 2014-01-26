$(document).ready(function(){ 
    // Display First Quote
    getDBQuotes();
    
    // Function That Gets The Quotes
    function getDBQuotes(){
        // Grabs JSON from connection php page
        $.getJSON("dbconnection.php", function(json) {
            if (json.length > 0) {			
                $.each(json,function() {
                    var quote_data = this['quote']; 
                        $('#blockquote').append( quote_data );
                });
            }
        });
    }; // end getQuotes
	
    // Function That Runs The Function That Grabs The Quotes
    $(".button").click( function(){
        $("#blockquote").empty();
            getDBQuotes();
    }); // end click funtion
}); // end ready function