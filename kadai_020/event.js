// HTML要素を取得し、定数に代入する
const btn = document.getElementById('btn');
// HTML要素がクリックされたときにイベント処理を実行する
btn.addEventListener('click', function() {

  document.getElementById("text").textContent = "クリックしました！";
});
