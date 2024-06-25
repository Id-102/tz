/* 设置body的margin为0，确保iframe可以全屏显示 */
body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    overflow: hidden; /* 隐藏滚动条 */
}

/* 使iframe全屏 */
#fullscreen-iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none; /* 移除边框 */
}
