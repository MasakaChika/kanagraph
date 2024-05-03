document.addEventListener('DOMContentLoaded', function () {
  // 画像をクリックしたら対応するモーダルを表示
  var images = document.querySelectorAll('.portfolio-section__landscape-container img');
  var modal = document.getElementById('modal');
  var modalImg = document.getElementById('modal-img');
  var closeBtn = document.querySelector('.close');

  images.forEach(function (img) {
    img.onclick = function () {
      // スマートフォンやタブレットの場合はモーダルを表示しない
      if (!isMobileOrTablet()) {
        modal.style.display = 'block';
        modalImg.src = this.src;
      }
    };
  });

  // 閉じるボタンをクリックしたらモーダルを非表示
  closeBtn.onclick = function () {
    modal.style.display = 'none';
  };

  // モーダルの外側をクリックしたらモーダルを非表示
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = 'none';
    }
  };

  // スマートフォンやタブレットかどうかを判定する関数
  function isMobileOrTablet() {
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
  }
});
