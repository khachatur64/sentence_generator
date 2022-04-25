const ARRAY_NAME = ['BABBLE', 'INTRO', 'INTENT_or_ACTION', 'ARTICLE', 'A_ZERO', 'MODIFIERS']

const Array_WORD = [
    ['hi', 'ooh', 'yes', 'yap', 'hello', 'ahh', 'hum'],
    ['can i get', 'can i have', 'can i pay', 'can i', 'can you', 'do i', 'do you', 'how can'],
    ['add', 'get', 'order'],
    ['a', 'about', 'to', 'for', 'into', 'an', 'on'],
    ['service to my home phone', 'service'],
    [
        'as i did not have time earlier',
        'as your system was down earlier on',
        'at a lot ',
        'at a new address',
        'at a new residence',
        'at my home',
        'at my new house',
        'at my new house in san jose',
        'at my residence',
        'at our new address',
        'can u check it',
        'did it get done',
        'for my cousin in my name at another address',
        'for my mom',
        'for my residence',
        'from one address to another one',
        'in house',
        'in mission viejo',
        'in my house',
        'in my name',
    ]
]

//print array names
for (var i = 0; i < ARRAY_NAME.length; i++) {
    $('thead').append('<th>' + ARRAY_NAME[i] + '</th>');
}
//end print array names

//print array words
function ArrayFunction() {
    var html = '';
    let arrayLength  = [];
    for (var i = 0; i < Array_WORD.length; i++){
        arrayLength.push(Array_WORD[i].length)
    }

    let maxArrayLength = Math.max(...arrayLength);
    for (var i = 0; i < maxArrayLength; i++) {
        html += '<tr>';
        for (var j = 0; j < Array_WORD.length; j++) {
            let test =  Array_WORD[j][i] !== undefined ? Array_WORD[j][i] : ''
            html += '<td>' + test + '</td>';
        }
        html += '</tr>';
    }
    $('tbody').append(html);
}
ArrayFunction()
//end print array words

//added new word in array
$(document).ready(function(){
    for (var i = 0; i < ARRAY_NAME.length; i++) {
        $('select').append('<option value="'+i+'">' + ARRAY_NAME[i] + '</option>');
    }
    $(".add-words").click(function() {
        var i = $('select').val();
        Array_WORD[i].push($('input').val()); //Replace with this and it will get the text from clicked li only.

        $('tbody').html('')
        ArrayFunction()
    });
});

function getRandomSentence (array) {
    var index= Math.floor(Math.random() * (array.length));
    return array[index];
}

//generated sentence
let text = '';
$(".generated-sentence").click(function() {
    text = '';
    let wordsLength = Array_WORD[0].length + Array_WORD[1].length + Array_WORD[2].length + Array_WORD[3].length + Array_WORD[4].length + Array_WORD[5].length
    console.log(wordsLength, 444)
    for (let i = 0; i < wordsLength * 40; i++) {
        text += '<br>' + [getRandomSentence(Array_WORD[0]), getRandomSentence(Array_WORD[1]), getRandomSentence(Array_WORD[2]), getRandomSentence(Array_WORD[3]), getRandomSentence(Array_WORD[4]), getRandomSentence(Array_WORD[5]) + "."].join(" ");
    }
    document.getElementById("new-sentence").innerHTML  = text
    document.getElementById("txtarea").innerHTML = text;
});




