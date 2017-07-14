$(document).ready(function() {
        // $.toast({
        //     heading: 'Welcome to Elite admin',
        //     text: 'Use the predefined ones, or specify a custom position object.',
        //     position: 'top-right',
        //     loaderBg: '#ff6849',
        //     icon: 'info',
        //     hideAfter: 3500,

        //     stack: 6
        // })
    });
function testAnim(x) {
        $('#animationSandbox').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $(this).removeClass();
        });
    };

    $(document).ready(function() {
        $('.js--triggerAnimation').click(function(e) {
            e.preventDefault();
            var anim = $('.js--animations').val();
            testAnim(anim);
        });

        $('.js--animations').change(function() {
            var anim = $(this).val();
            testAnim(anim);
        });
    });