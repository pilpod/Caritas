<div class="w-screen h-14 fixed">
    <button type="button" onclick="topFunction()" id="backToTop" title="backToTop" class="fixed m-4 right-4 bottom-3 border-solid border-white w-10 h-10 rounded-md bg-red hover:bg-red-light ">
    <img class="object-contain" src="{{ asset('storage/img/backToTop.png') }}" alt="BackToTop"/></button>
</div>

@push('script-back-to-top')    
<script>

    let buttonBackToTop = document.getElementById("backToTop");
    
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            buttonBackToTop.style.display = "block";
        } else {
            buttonBackToTop.style.display = "none";
        }
    }
    
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
@endpush