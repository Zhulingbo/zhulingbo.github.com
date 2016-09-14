DpVideo = function (option) {
    var _this = this;
    this.video = document.createElement('video');
    this.video_mask = document.querySelector('.video_mask');
    if (!this.video_mask) {
        this.video_mask = document.createElement('div');
        this.video_mask.setAttribute('class', 'video_mask');
        document.body.appendChild(this.video_mask);
    }
    this.src = option.src;
    if (!this.src) {
        throw "video source is null";
    }
    this.video.setAttribute('x-wekit-airplay', true);
    this.video.setAttribute('webkit-playsinline', true);
    this.video.src = this.src;
    this.video.addEventListener('ended', function () {
        _this.stop();
    });
    this.video_mask.addEventListener('click', function () {
        _this.stop();
    });
    this.video_mask.appendChild(this.video);
};
DpVideo.prototype.stop = function () {
    this.video.pause();
    document.querySelector(".video_mask").style.display = 'none';
};
DpVideo.prototype.play = function () {
    this.video.load();
    document.querySelector(".video_mask").style.display = 'block';
    this.video.play();
};