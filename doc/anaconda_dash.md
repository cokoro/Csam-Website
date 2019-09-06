# Download
Download from https://www.anaconda.com/distribution/#download-section

#Environment
可以用如下命令创建一个名字为my_py_env，python版本为3.6.2的虚拟环境。
```
conda create -n py3 python=3.7.4
```
进入环境
```
activate py3
```
在windows系统cmd下通过以上命令即可进入my_py_env环境，如果在linux系统下，需要使用：
```
source activate py3
```
conda install 库名 ：可以直接安装想要的库。如：
```
conda install -c conda-forge dash -y
conda install -c anaconda xlsxwriter -y
```
本地运行代码：
```
python app.py
```


# db project
```
<iframe src="http://tangtyuncsam.pythonanywhere.com/" width="100%" height="900" frameborder="0" sandbox="allow-same-origin allow-scripts"></iframe>
```

or

```
<p><iframe frameborder="0" height="2700" sandbox="allow-same-origin allow-scripts" src="http://tonytang970430.pythonanywhere.com/" width="100%"></iframe></p>
```

# CSS 样式
```
 html.Div(
            className="card",
            style={'margin': '10px'},
 )
```
### 卡片样式参考
https://blog.csdn.net/weixin_36869329/article/details/85140424

# 参考网站
### Dash App范例
https://dash-gallery.plotly.host/Portal/

### 统计图样式
https://www.highcharts.com/demo/area-basic

### dash文档
https://plot.ly/python/

### dash简单例子代码

https://github.com/plotly/simple-example-chart-apps/tree/master/dash-choroplethplot

Some very simple apps hosted at https://dash-simple-apps.plotly.host/ meant for embedding into https://plot.ly/python

### 单个文件夹下载
https://minhaskamal.github.io/DownGit/#/home

### python plotly 使用教程
https://www.jianshu.com/p/57bad75139ca
