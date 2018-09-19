#### 基于docker的thinkphp5框架

#### 文件目录

```
app                      框架主体   
bin                      脚本文件夹
log                      相关日志
services                 包含相关服务配置，如mysql、nginx、redis等等
```

#### 端口配置

mysql默认端口为：`33060`

nginx默认端口为：`8080`

redis默认端口为：`63790`

具体配置可修改根目录`.env`文件

#### 启动命令

```
docker-compose up --build -d #构建并后台执行
```

启动后访问`http://localhost（当前docker服务器ip）:8080`即可