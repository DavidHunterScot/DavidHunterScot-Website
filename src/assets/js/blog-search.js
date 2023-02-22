const xhttp = new XMLHttpRequest();

xhttp.onload = function()
{
    const xhttp1 = new XMLHttpRequest();

    xhttp1.onload = function()
    {
        var blog_search_form = document.getElementById( "blog-search-form" );

        blog_search_form.style.display = "block";

        blog_search_form.onsubmit = function( event )
        {
            var searchbox = document.getElementById( "searchbox" );

            var json_result = JSON.parse( xhttp.responseText );

            var results = [];

            for( var r = 0; r < json_result.length; r++ )
            {
                if( ( json_result[ r ].title.toLowerCase() + json_result[ r ].description.toLowerCase() ).includes( searchbox.value.toLowerCase() ) )
                {
                    results.push( json_result[ r ] );
                }
            }

            var section_title = document.getElementsByClassName( "section-title" )[0];

            section_title.innerHTML = "\"" + searchbox.value + "\" Entries";

            var blog_entries = document.getElementsByClassName( "blog-entries" )[0];

            blog_entries.innerHTML = "Your search for \"" + searchbox.value + "\" returned " + results.length + " result" + ( results.length != 1 ? "s" : "" ) + ".";

            for( var r = 0; r < results.length; r++ )
            {
                var avatar_image = results[ r ].avatar_url ? '<img src="' + results[ r ].avatar_url + '" alt="' + results[ r ].author + '\'s Avatar" class="avatar">' : '';
                blog_entries.innerHTML += xhttp1.responseText
                .replace( "TITLE", results[ r ].title )
                .replace( "AVATAR IMAGE", avatar_image )
                .replace( "AUTHOR NAME", results[ r ].author )
                .replace( "DATETIME", results[ r ].datetime )
                .replace( "DESCRIPTION", results[ r ].description )
                .replace( "PERMALINK", results[ r ].permalink );
            }

            return false;
        }
    }

    xhttp1.open( "GET", "/api/blog/entry-snippet.txt" );
    xhttp1.send();
}

xhttp.open( "GET", "/api/blog/entries.json" );
xhttp.send();
