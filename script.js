$(document).ready(function() {
    $.ajax({
        dataType: 'json',
            url: 'xml_to_json.php',
            type: 'GET',
            data: { get_param: 'value' },
            success: function (data) { 
                console.log(data);
                data.entry.forEach(function(element,index) {
                    const title = '<span>' + element.title + " by " + "<br>"+'</span>';
                    const author = '<span>' + element.author.name + '</span>';
                    $('section').append(`<div class="clearfix">${title}${author}${element.content}</div>`);
            });
        }
    });
});