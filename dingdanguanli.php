<?php include 'header.php' ?>

<div class="container">
    <div class="span-6">
        <aside class="span-6">
            <ul class="side-menu-1">
                <li class="header">产品管理</li>
                <li><a>域名管理</a></li>
                <li><a>虚拟主机管理</a></li>
                <li><a>邮箱管理</a></li>
                <li><a>云VPS管理</a></li>
                <li><a>云VPS主机</a></li>
                <li><a>订单管理</a></li>
            </ul>
        </aside>
        <aside class="span-6">
            <ul class="side-menu-1">
                <li class="header">其他管理</li>
                <li><a>用户资料</a></li>
                <li><a>财务管理</a></li>
                <li><a>在线充值</a></li>
                <li><a>安全退出</a></li>
            </ul>
        </aside>
    </div>

    <main class="span-18 last">
       <div class="dingdanchaxun">
           <div class="chaxun-jg span-16 last">
               <div class="span-16 chaxun-jg-1">
                   <span class="sousuo icon icon-sousuo span-14 last">订单查询</span>
                   <span class="span-14 last xiadan-time">
                       <span class="span-3" style="text-align: right">下单时间：</span>
                       <span class="span-9 last">
                           <form>
                           <span class="span-4">
                             <input type="text" id="datepicker">
                           </span>
                           <span class="span-1"style="text-align: center">至</span>
                           <span class="span-4 last">
                              <input type="text" id="datepicker1">
                           </span>
                           </form>
                       </span>
                   </span>
                   <span class="span-14 last dingdanzhuangtai">
                       <span class="span-3" style="text-align:right; padding-top: 3px ">订单状态：</span>
                       <span class="span-2 last">
                       <select class="span-2 last">
                           <option>已支付</option>
                           <option>未支付</option>
                           <option>已支付</option>
                           <option>未支付</option>
                       </select>
                       </span>
                   </span>
                   <span class="dingdan-chaxun span-14"><a class="btn">查询</a></span>
               </div>

           </div>

               <div class="yuming-cp span-16 last">
                   <div class="span-16 yuming-cp1 bg-cl-white last">
                       <h2>域名产品</h2>
                       <div class="span-16">
                           <table width="100%" id="mytab" class="mail-peizhi-tr">
                               <thead class="user-yuming">
                               <th width="10%"><input type="checkbox">全选</th>
                               <th width="15%">域名</th>
                               <th width="10%">单价</th>
                               <th width="15%">金额</th>
                               <th width="15%">下单时间</th>
                               <th width="15%">状态</th>
                               <th width="12%">操作</th>
                               <tr>
                                   <td><input type="checkbox">1.</td>
                                   <td>yysamson.com</td>
                                   <td>48元/年</td>
                                   <td>￥598.00元</td>
                                   <td>2014-04-07</td>
                                   <td>已支付 已生效</td>
                                   <td><a class="cl-blue-light">申请退款</a></td>
                               </tr>
                               <tr>
                                   <td><input type="checkbox">2.</td>
                                   <td>yysamson.com</td>
                                   <td>48元/年</td>
                                   <td>￥598.00元</td>
                                   <td>2014-04-07</td>
                                   <td><span class="cl-red">未支付</span> <a class="cl-blue-light">支付</a></td>
                                   <td><a class="cl-blue-light">修改</a><a class="cl-blue-light">  取消</a></td>
                               </tr>

                           </table>
                       </div>
                   </div>

                   <div class="span-16 yuming-cp1 bg-cl-white last">
                       <h2>VPS产品</h2>
                       <div class="span-16">
                           <table width="100%" id="mytab" class="mail-peizhi-tr">
                               <thead class="user-yuming">
                               <th width="10%"><input type="checkbox">全选</th>
                               <th width="15%">产品名称</th>
                               <th width="10%">单价</th>
                               <th width="15%">金额</th>
                               <th width="15%">下单时间</th>
                               <th width="15%">状态</th>
                               <th width="12%">操作</th>
                               <tr>
                                   <td><input type="checkbox">1.</td>
                                   <td>yysamson.com</td>
                                   <td>48元/年</td>
                                   <td>￥598.00元</td>
                                   <td>2014-04-07</td>
                                   <td>已支付 已生效</td>
                                   <td><a class="cl-blue-light">申请退款</a></td>
                               </tr>
                               <tr>
                                   <td><input type="checkbox">2.</td>
                                   <td>yysamson.com</td>
                                   <td>48元/年</td>
                                   <td>￥598.00元</td>
                                   <td>2014-04-07</td>
                                   <td><span class="cl-red">未支付</span> <a class="cl-blue-light">支付</a></td>
                                   <td><a class="cl-blue-light">修改</a><a class="cl-blue-light">  取消</a></td>
                               </tr>

                           </table>
                       </div>
                   </div>
               </div>

       </div>
    </main>
</div>
<?php include 'footer.php' ?>