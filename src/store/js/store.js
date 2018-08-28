// Store Page Product Grid
var grid = document.querySelector('.grid');



imagesLoaded( grid, function() {
    console.log('images loaded');
    
    var msnry = new Masonry( grid , {
        itemSelector: '.grid-item',
        columnWidth: '.grid-item',
        horizontalOrder: false,
        fitWidth: true
    });
});

// Add expand item event
grid.addEventListener( 'click', expandItem );

// Expand item
function expandItem(e){
    
    // get li item
    const li = e.target.parentElement;
    console.log(e);
    // move item image
//    for (var i = 0; i < li.children.length; i++) {
//        // check by tag name
//        if ( li.children[i].tagName == 'IMG' ) {
//            let image = li.children[i];
//            
//            
//            console.log( li.children[i] );    
//        };
//        // check by class name
//        if ( li.children[i].classList.contains('price') ) {
//            console.log( li.children[i] );    
//        };
//    };
}
