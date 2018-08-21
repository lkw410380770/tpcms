<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\goods_brand\edit.html";i:1534830760;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>layout 后台大布局 - Layui</title>
    <link rel="stylesheet" href="/public/static/admin/layui/css/layui.css">
</head>

<body class="layui-layout-body">
    <div class="layui-layout layui-layout-admin">
        <div class="layui-body" style="position: static;">
            <!-- 内容主体区域 -->
            <div style="padding: 15px;">
                <form class="layui-form" action="<?php echo url('save'); ?>" method="post">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <div class="layui-form-item">
                        <label class="layui-form-label">品牌名称</label>
                        <div class="layui-input-block">
                            <input type="text" name="name" value="<?php echo $data['name']; ?>" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">地址</label>
                        <div class="layui-input-block">
                            <input type="text" name="url" required value="<?php echo $data['url']; ?>" lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">
                            品牌缩略图
                        </label>
                        <div class="layui-input-block">
                            <div class="layui-upload">
                                <input type="hidden" value="<?php echo $data['logo']; ?>" name="logo" class="imgurl">
                                <button type="button" class="layui-btn choose-img"  data-url="<?php echo url('goodsBrand/upImg'); ?>" id="test1">选择图片</button>
                                <button type="button" class="layui-btn uploadImg" id="uploadLogo">上传图片</button>
                                <div class="layui-upload-list">
                                    <img class="layui-upload-img" src="/public/<?php echo $data['logo']; ?>" width="130" src="" id="demo1">
                                    <p id="demoText"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="/public/static/admin/layui/layui.js"></script>
    <script src="/public/static/admin/js/jquery1.9.js"></script>
    <script src="/public/static/admin/js/common.js"></script>
    <script>
        UPLOADIMG = {
            url:$('.choose-img').attr('data-url')
        }
    </script>
    <script src="/public/static/admin/js/public-uploadImg.js"></script>
    <script>

    </script>
</body>

</html>