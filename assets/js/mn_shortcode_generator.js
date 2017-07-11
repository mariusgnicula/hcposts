// save elements to variables

var mnSubmit = document.getElementById('mnShortGenSubmit'),
    mnNumber = document.getElementById('mnShortGenNumber'),
    mnResult = document.getElementById('mnShortGenResult');

// listen for when the submit input is clicked
// prevent default button click behaviour

mnSubmit.addEventListener('click', function(e) {
   e.preventDefault();

   // save the number value in a new variable

   var mnNewNumber = mnNumber.value,
       mnPostArray = [];
       mnCheckedPosts = document.querySelectorAll('#mnShortGenPosts option:checked');

    // go through each option that is checked and push it's value to the mnPostArray

    Array.prototype.forEach.call(mnCheckedPosts, function(el, i){
        mnPostArray.push(el.value);
    });

    // create the shortcode

   mnResult.innerHTML = '[mn_posts number="' + mnNewNumber + '" posts="' + mnPostArray +'"]';
});