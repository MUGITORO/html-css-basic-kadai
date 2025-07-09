 // add-btnというidを持つHTML要素を取得し、定数に代入する
 const addBtn = document.getElementById('add-btn');

 // parent-listというidを持つHTML要素を取得し、定数に代入する
 const parentList = document.getElementById('parent-list');

   btn.addEventListener('click', () => { 

   const childList = document.createElement('li');

  childList.textContent = 'ボタンをクリックしました';

 });