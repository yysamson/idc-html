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
                        <span class="sousuo icon icon-sousuo span-14 last">主机查询</span>
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
                        <h2>虚拟主机</h2>
                        <div class="span-16">
                            <table width="100%" id="mytab" class="mail-peizhi-tr">
                                <thead class="user-yuming">
                                <th width="15%">主机类型</th>
                                <th width="15%">域名绑定</th>
                                <th width="15%">主机登录名</th>
                                <th width="12%">购买时间</th>
                                <th width="15%">到期时间</th>
                                <th width="12%">操作</th>
                                <tr>
                                    <td>M享主机-M3(云) </td>
                                    <td>yysamson.com</td>
                                    <td>hmw113239</td>
                                    <td>2014-04-07</td>
                                    <td>2014-04-07</td>
                                    <td><a class="cl-blue-light">  续费</a></td>
                                </tr>
                                <tr>
                                    <td>M享主机-M3(云) </td>
                                    <td>yysamson.com</td>
                                    <td>hmw113239</td>
                                    <td>2014-04-07</td>
                                    <td>2014-04-07</td>
                                    <td><a class="cl-blue-light">  续费</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="span-16 yuming-cp1 bg-cl-white last">
                        <h2>主机详情</h2>
                        <div class="span-16 last">
                            <table width="100%" cellspacing="0" class="yumingxiangqing-tr" id="mytab">
                                <thead>
                                <tr>
                                    <td width="20%" class="yumingxiangqing-td">主机类型：</td>
                                    <td width="60%" class="yumingxiangqing-td1">M享主机-M3云</td>
                                    <td width="20%" class="yumingxiangqing-td1">
                                        <a class="cl-blue-light">主机续费</a>  <a class="cl-blue-light">主机升级</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <table width="100%" id="mytab" border="1" class="yuming-td2">
                                            <thead>
                                            <td width="20%" class="yumingxiangqing-td">注册类型：</td>
                                            <td width="61%" class="yumingxiangqing-td1">www.yysamson.com</td>
                                            <td width="19%" class="yumingxiangqing-td1"> <a class="cl-blue-light">主机续费</a>  <a class="cl-blue-light">主机升级</a></td>
                                            </tr>
                                            <tr>
                                                <td class="yumingxiangqing-td">联系人：</td>
                                                <td class="yumingxiangqing-td1">三木森</td>
                                                <td class="yumingxiangqing-td1"> <a class="cl-blue-light">更换主机域名</a></td>
                                            </tr>
                                            <tr>
                                                <td class="yumingxiangqing-td">公司名称：</td>
                                                <td class="yumingxiangqing-td1">三木森</td>
                                                <td class="yumingxiangqing-td1"></td>
                                            </tr>
                                            <tr>
                                                <td class="yumingxiangqing-td">所在国家：</td>
                                                <td class="yumingxiangqing-td1">三木森</td>
                                                <td class="yumingxiangqing-td1"></td>
                                            </tr>
                                            <tr>
                                                <td class="yumingxiangqing-td">省份：</td>
                                                <td class="yumingxiangqing-td1">三木森</td>
                                                <td class="yumingxiangqing-td1"></td>
                                            </tr>
                                            <tr>
                                                <td class="yumingxiangqing-td">城市：</td>
                                                <td class="yumingxiangqing-td1">三木森</td>
                                                <td class="yumingxiangqing-td1"></td>
                                            </tr>
                                            <tr>
                                                <td class="yumingxiangqing-td">通信地址：</td>
                                                <td class="yumingxiangqing-td1">余姚市万年桥路49号，三木森网络科技发展有限公司</td>
                                                <td class="yumingxiangqing-td1"></td>
                                            </tr>
                                            <tr>
                                                <td class="yumingxiangqing-td">邮编：</td>
                                                <td class="yumingxiangqing-td1">三木森</td>
                                                <td class="yumingxiangqing-td1"></td>
                                            </tr>
                                            <tr>
                                                <td class="yumingxiangqing-td">电话号码：</td>
                                                <td class="yumingxiangqing-td1">三木森</td>
                                                <td class="yumingxiangqing-td1"></td>
                                            </tr>
                                            <tr>
                                                <td class="yumingxiangqing-td">传真：</td>
                                                <td class="yumingxiangqing-td1">三木森</td>
                                                <td class="yumingxiangqing-td1"></td>
                                            </tr>
                                            <tr style="border: 0">
                                                <td class="yumingxiangqing-td">电子邮件：</td>
                                                <td class="yumingxiangqing-td1">三木森</td>
                                                <td class="yumingxiangqing-td1"></td>
                                            </tr>
                                        </table>

                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>

            </div>


        </main>
    </div>
<?php include 'footer.php' ?>