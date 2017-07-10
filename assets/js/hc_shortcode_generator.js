var hcSubmit = document.getElementById('hcShortGenSubmit'),
    hcNumber = document.getElementById('hcShortGenNumber'),
    hcResult = document.getElementById('hcShortGenResult');

hcSubmit.addEventListener('click', function(e) {
   e.preventDefault();

   var hcNewNumber = hcNumber.value,
       hcPostArray = [];
       hcCheckedPosts = document.querySelectorAll('#hcShortGenPosts option:checked');

    Array.prototype.forEach.call(hcCheckedPosts, function(el, i){
        hcPostArray.push(el.value);
    });

   hcResult.innerHTML = '<pre>[hc_posts number="' + hcNewNumber + '" posts="' + hcPostArray +'"]</pre>';
});