function setFontStyle() {
    localStorage.clear();
    localStorage.setItem('fontFamily', document.getElementById('fontFamily').value);
    localStorage.setItem('fontColor', document.getElementById('fontColor').value);
}

document.getElementById('search-result').style.fontFamily = localStorage.getItem('fontFamily');
document.getElementById('search-result').style.color = '#' + localStorage.getItem('fontColor');
document.getElementById('fontFamily').value = localStorage.getItem('fontFamily');

switch (localStorage.getItem('fontColor')) {
    case '0b6eef':
        document.getElementById('fontColor').value = '0b6eef';
        break;

    case '22e53c':
        document.getElementById('fontColor').value = '22e53c';
        break;

    case 'ff3232':
        document.getElementById('fontColor').value = 'ff3232';
        break;

    case 'f24a33':
        document.getElementById('fontColor').value = 'f24a33';
        break;

    case '420690':
        document.getElementById('fontColor').value = '420690';
        break;

    default:
        document.getElementById('fontColor').value = '';
        break;
}