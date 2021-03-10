<div class="flex w-screen h-14 place-content-center fixed right-6 md:right-4">
    {{-- <a class="" href="#"> --}}
    <button type="button" onclick="topFunction()" id="backToTop" title="backToTop" class="fixed bottom-3 border-solid border-white w-10 h-10 rounded-md bg-red hover:bg-red-light ">
    <img class="object-contain" src="{{ asset('storage/img/backToTop.png') }}" alt="BackToTop"/></button>
    {{-- </a>     --}}
</div>

@push('script-back-to-top')    
<script>
    //Get the button
    let buttonBackToTop = document.getElementById("backToTop");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            buttonBackToTop.style.display = "block";
        } else {
            buttonBackToTop.style.display = "none";
        }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
@endpush