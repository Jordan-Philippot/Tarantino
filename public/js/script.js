/* CURSOR */
(function () {

    const link = document.querySelectorAll('ul > .hover-this');
    const cursor = document.querySelector('.cursor');

    const animateit = function (e) {
        const span = this.querySelector('.hover-this a');
        const { offsetX: x, offsetY: y } = e,
            { offsetWidth: width, offsetHeight: height } = this,

            move = 25,
            xMove = x / width * (move * 2) - move,
            yMove = y / height * (move * 2) - move;

        span.style.transform = `translate(${xMove}px, ${yMove}px)`;

        if (e.type === 'mouseleave') span.style.transform = '';
    };

    const editCursor = e => {
        const { clientX: x, clientY: y } = e;
        cursor.style.left = x + 'px';
        cursor.style.top = y + 'px';
    };

    link.forEach(b => b.addEventListener('mousemove', animateit));
    link.forEach(b => b.addEventListener('mouseleave', animateit));
    window.addEventListener('mousemove', editCursor);

})();


/* RECHERCHE AJAX ACCUEIL*/
$('#searchWelcome').on('keyup', function () {
    var query = $(this).val();

    $.ajax({
        url: "/search",
        type: "GET",
        data: {
            'searchWelcome': query,
        },

        success: function (data) {
            $('#results').html("")
            $('#resultsSearch').html(data);
        }
    })
});

$(document).on('click', '#dataSearch', function () {
    var value = $(this).text();
    $('#searchWelcome').val(value);
    $('#resultsSearch').html("");
});
