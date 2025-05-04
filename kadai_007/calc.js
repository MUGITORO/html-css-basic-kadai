if (num) {
  else if (num % 3 == 0) {
  条件Aが成り立つときの処理
}
    console.log('3の倍数です')
    break;
  else if (num % 5 == 0) {
  条件Aが成り立つときの処理
}
    console.log('3の倍数です')
    break;
  else if (num % 3 == 0 && num % 5 == 0) {
    console.log(“3と5の倍数です”)
    break;
  default:
    console.log('num')
    break;
}

num = 15