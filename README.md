# GTASuperESC
![下载地址](https://wgzeyu.github.io/GTASuperESC/img/releases.jpg)  
点上方的releases可以下载  
一键结束进程或断网，支持多人联机一人按键一起结束进程或断网，GTA5做首脑时用的，有人死了一人按键一起结束进程，数据不会上传，进度不会重置，不需要从头做  
软件引用了以下模块：  
精易模块 (源码：http://ec.125.la)  
WebSocketClient (源码：https://bbs.125.la/thread-14039123-1-1.html)  
传输封包='文本_加密c(<body><hash>时间!随机数</hash>传输内容</body><md5>body标签内(包含标签)的MD5</md5>)'  
自动/手动创建房间，使用UDP或TCP传输时都是直接发送传输封包，加密后是字节集类型，不需要转换  
WebSocket是使用workerman-chat聊天室，发送内容就像这样：  
{"type":"say","to_client_id":"all","to_client_name":"所有人","content":"Base64编码(传输封包)"}  
  
One key ends the process or breaks the network, supports the multi person on-line one person key, many people end the process together or break the net. When playing with GTA5's "God of Crime" achievement, someone dies and pushes the button quickly. Four people end the GTA5 process together. Data will not be uploaded, progress will not be reset, and no need to do it from scratch.  
The software is written in "易语言"(Easy Language) and supports TCP/UDP transmission. The server can automatically create a mapping through UPnP. One key automatically creates the server and detects whether it is valid. The transmission process is encrypted simply. The anti-replay and heartbeat packets ensure the reliability of the transmission. The software supports multiple processes. If the end process fails, it will be terminated by taskkill. Net mode is to disable network card.  
