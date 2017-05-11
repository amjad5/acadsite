//$('#add-lect').click(function
$('#content').on('click', '#add-lect', function() {
    var count = parseInt($(this).parent().children('#lects').children().length / 2) + 1;
    section_count = $(this).parent().parent().length;
    lectures = '<label>Lecture ' + count + ':</label><input type="text" name="lecture['+section_count+'][]" id="lecture"/>'
    $(this).parent().find('#lects').append(lectures);
});

$('#add-sect').click(function(){
    sect_id = parseInt($('#add-sect').attr('data-sect')) + 1;
    $('#add-sect').attr('data-sect',  sect_id);
    var count = ($("#secs").children().length / 2) + 1;

    //section = '<div id="section-content-'+sect_id+'"> <div id="secs"> <label for="section">Section'+sect_id+':</label><input type="text" name="section" id="section-"/></div><div id="lects"><label for="lecture">Lecture 1:</label><input type="text" name="lecture" id="lecture"/></div><button type="button" id="add-lect" data-lect="1">Add New Lecture</button<br><br></div>'
    section = '<div id="section-content-'+sect_id+'"><div id="secs"><label for="section">Section '+sect_id+':</label> <input type="text" name="section['+sect_id+']" id="section"/></div><div id="lects"><label for="lecture">Lecture 1:</label><input type="text" name="lecture['+sect_id+'][]" id="lecture"/></div><button type="button" id="add-lect" data-lect="1">Add New Lecture</button><br><br></div>'

    $('#content').append(section);
});
