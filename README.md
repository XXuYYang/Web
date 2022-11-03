
# 远程协作画布软件

这是一款使用网页模式实现的远程协作画布软件。用户可以创建自己的画布，也加入别人的画布。画布拥有者可以控制画布为可编辑模式或只读模式。

## 界面构成

1.登录界面<br />
&ensp;&ensp;&ensp;&ensp;你的名字：用户名称<br />
&ensp;&ensp;&ensp;&ensp;进入画布：其他用户的画布<br />
&ensp;&ensp;&ensp;&ensp;登&ensp;&ensp;&ensp;&ensp;录：进入相应的画布界面<br />
2.画布界面<br />
&ensp;&ensp;&ensp;&ensp;菜单栏：颜色选择<br />
&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;画笔粗细<br />
&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;清除图像按钮<br />
&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;绘制矩形按钮<br />
&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;绘制图按钮<br />
&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;用户“用户id”的画板<br />
&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;用户“用户id”<br />
&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;其它只读按钮<br />
&ensp;&ensp;&ensp;&ensp;画布域：可以绘制图形<br />


## 使用教程
1.启动服务器
&ensp;&ensp;&ensp;&ensp;在控制台运行`php listen.php start`
2.创建画布
&ensp;&ensp;&ensp;&ensp;用户在登陆界面输入用户名和画布名称，就可以创建用户并创建属于自己的画布
3.进入画布
&ensp;&ensp;&ensp;&ensp;画布拥有者：创建画布完成即自动进入画布
&ensp;&ensp;&ensp;&ensp;其他用户：输入自己的用户名称和想加入的画布名称即可进入
4.绘制图形
&ensp;&ensp;&ensp;&ensp;提供的图形：圆形、矩形
&ensp;&ensp;&ensp;&ensp;用户可以自己绘制图案或者使用提供的图案进行绘制
5.使用控制
&ensp;&ensp;&ensp;&ensp;拥有者可以控制画布是否可以作画，当不限制时，进入该画布的用户都可以作画，切换为只读模式时，不可以作画
6.效果展示
&ensp;&ensp;&ensp;&ensp;见视频展示
