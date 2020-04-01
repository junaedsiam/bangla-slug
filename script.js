/* create unique url */
function slugify(string){
    const a = 'àáäâãåăæçèéëêǵḧìíïîḿńǹñòóöôœøṕŕßśșțùúüûǘẃẍÿź·/_,:;';
    const b = 'aaaaaaaaceeeeghiiiimnnnooooooprssstuuuuuwxyz------';
    const p = new RegExp(a.split('').join('|'), 'g');
    return string.toString().toLowerCase()
    .replace(/\s+/g, '-') // Replace spaces with -
    .replace(p, c => b.charAt(a.indexOf(c))) 
    .replace(/&/g, '-and-') // Replace & with ‘and’
    .replace(/[^(\u0980-\u09FF)\w\-]+/g, '') // Remove all non-word characters
    .replace(/\-\-+/g, '-') // Replace multiple - with single -
    .replace(/^-+/, '') // Trim - from start of text
    .replace(/-+$/, '') // Trim - from end of text
  }
var str = 'পৃথিবীর শেষ প্রান্তে দাঁড়িয়ে হারিয়েছি পথ ! ';
var slug = slugify(str);
console.log(slug);