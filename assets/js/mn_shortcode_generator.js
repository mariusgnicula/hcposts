var mnSubmit = document.getElementById('mnShortGenSubmit'),
    mnNumber = document.getElementById('mnShortGenNumber'),
    mnResult = document.getElementById('mnShortGenResult');

mnSubmit.addEventListener('click', function(e) {
   e.preventDefault();

   var mnNewNumber = mnNumber.value,
       mnPostArray = [];
       mnCheckedPosts = document.querySelectorAll('#mnShortGenPosts option:checked');

    Array.prototype.forEach.call(mnCheckedPosts, function(el, i){
        mnPostArray.push(el.value);
    });

   mnResult.innerHTML = '<pre>[mn_posts number="' + mnNewNumber + '" posts="' + mnPostArray +'"]</pre>';
});