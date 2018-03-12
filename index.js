(function() {
    
    var dates = document.getElementsByClassName('mw-3-person__path__points')[0].getElementsByTagName('li');
    
    for ( var i = 0; i < dates.length; i++ ) {
        
        dates[i].addEventListener('click', function() {
            
            document.getElementsByClassName('mw-3-person__text')[0].getElementsByTagName('h3')[0].innerHTML = this.getAttribute('date') + ' год';
            
        });
        
    }
    
})();