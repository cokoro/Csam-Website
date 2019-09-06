### 查看Drupal网站使用的模块
https://blog.csdn.net/weixin_36869329/article/details/85140424

### Drupal 出错的解决办法
https://www.cnblogs.com/mafeifan/p/3573810.html

解决方法1：清空缓存

解决方法2：进系统后台查看日志记录
其实drupal系统后台，Home » Administration » Reports 提供很好的日志查看功能。

解决方法3：如果连系统后台都无法进入，可以去数据库查看watchdog数据表，variables字段保存了错误信息，可以用编辑器打开查看错误明细（这需要启用Database logging模块）。