<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Bootstrap表单组件 - Bootstrap后台管理系统模版Ace下载</title>
		<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="/webgame/Public/admin/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/webgame/Public/admin/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="/webgame/Public/admin/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<link rel="stylesheet" href="/webgame/Public/admin/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="/webgame/Public/admin/css/chosen.css" />
		<link rel="stylesheet" href="/webgame/Public/admin/css/datepicker.css" />
		<link rel="stylesheet" href="/webgame/Public/admin/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="/webgame/Public/admin/css/daterangepicker.css" />
		<link rel="stylesheet" href="/webgame/Public/admin/css/colorpicker.css" />


		<!-- ace styles -->

		<link rel="stylesheet" href="/webgame/Public/admin/css/ace.min.css" />
		<link rel="stylesheet" href="/webgame/Public/admin/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/webgame/Public/admin/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="/webgame/Public/admin/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="/webgame/Public/admin/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/webgame/Public/admin/js/html5shiv.js"></script>
		<script src="/webgame/Public/admin/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							纽扣后台游戏管理系统 v3.1.3
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-ok"></i>
									还有4个任务完成
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">软件更新</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:65%" class="progress-bar "></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">硬件更新</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:35%" class="progress-bar progress-bar-danger"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">单元测试</span>
											<span class="pull-right">15%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:15%" class="progress-bar progress-bar-warning"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">错误修复</span>
											<span class="pull-right">90%</span>
										</div>

										<div class="progress progress-mini progress-striped active">
											<div style="width:90%" class="progress-bar progress-bar-success"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										查看任务详情
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-warning-sign"></i>
									8条通知
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												新闻评论
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-xs btn-primary icon-user"></i>
										切换为编辑登录..
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												新订单
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												粉丝
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										查看所有通知
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-envelope-alt"></i>
									5条消息
								</li>

								<li>
									<a href="#">
										<img src="/webgame/Public/admin/images/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												不知道写啥 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>1分钟以前</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="/webgame/Public/admin/images/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												不知道翻译...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20分钟以前</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="/webgame/Public/admin/images/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												到底是不是英文 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>下午3:15</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="inbox.html">
										查看所有消息
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/webgame/Public/admin/images/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎光临,</small>
									<?php echo ($_SESSION['session_account']); ?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="/webgame/index.php/Member/logout">
										<i class="icon-cog"></i>
										设置
									</a>
								</li>

								<li>
									<a href="/webgame/index.php/Member/">
										<i class="icon-user"></i>
										个人资料
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="/webgame/index.php/admin/Base/logout">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						<li class="active">
							<a href="index.html">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 控制台 </span>
							</a>
						</li>
						<?php if(is_array($sidebar)): $i = 0; $__LIST__ = $sidebar;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<a href="#" class="dropdown-toggle">
								<i class="<?php echo ($vo["ico"]); ?>"></i>
								<span class="menu-text"> <?php echo ($vo["name"]); ?> </span>
                                <b class="arrow icon-angle-down"></b>
							</a>
                            <?php if(count($vo['pid']) >0){ ?>
							<ul class="submenu">
                            	<?php if(is_array($vo['pid'])): $i = 0; $__LIST__ = $vo['pid'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><li>
									<a href="/webgame/index.php/<?php echo ($sub["url"]); ?>">
										<i class="icon-double-angle-right"></i>
										<?php echo ($sub["name"]); ?>
									</a>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
                            <?php } ?>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
                        	
						


					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Forms</a>
							</li>
							<li class="active">Form Elements</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>
					
                    

					<div class="page-content">
						<div class="page-header">
							<h1>
								玩家管理
								<small>
									<i class="icon-double-angle-right"></i>
									用户基本信息
								</small>
							</h1>
						</div><!-- /.page-header -->
                        
                        <div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
                                <div class="row">
									<form class="form-inline">
										<div class="col-sm-9">
											<span class="input-icon">
												<input type="text" class="form-control" placeholder="用户名">
												<i class="icon-search blue"></i>
											</span>

											<span class="input-icon">
												<input type="text" class="form-control" placeholder="用户ID">
												<i class="icon-search blue"></i>
											</span>
                                            
											
                                           <button type="button" class="btn btn-sm btn-primary" data-toggle="button">查询</button>
                                           
										</div>
									</form>
								</div><!-- /row -->
                                <div class="space"></div>
                                <div class="panel panel-info">
                           <div class="panel-heading">
                              <h3 class="panel-title">个人资料面板</h3>
                           </div>
                           
                           <div class="table-responsive">
											<div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid">
                                            	
                                            	<div class="row">
                                             <div class="col-xs-12"> 
                                              <div class="alert alert-block alert-success">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <i class="icon-remove"></i>
                                                </button>
            
                                                    <div class="inline middle blue bigger-110">个人资料完善度：</div>
                                                    <div style="width:200px;" data-percent="70%" class="inline middle no-margin progress progress-striped active">
                                                        <div class="progress-bar progress-bar-success" style="width:70%"></div>
                                                    </div>
                                            </div>
                                  
                                                <div class="table-responsive">
                                                	
											<table class="table table-striped table-bordered">
												

												<tbody>
													<tr>

														<td class="center">
															用户账号
														</td>
														<td>
                                                        	<span class="label label-sm label-success">
                                                            	946846782
                                                            </span>
                                                        </td>
														<td></td>
														<td></td>

														<td class="center">
															登录次数
														</td>

														<td>
                                                        	<span class="label label-warning arrowed arrowed-right">323</span>
														</td>
													</tr>

													<tr>

														<td class="center">
															用户ID
														</td>
														<td>ID946846782
                                                        	<button class="btn btn-minier btn-info pull-right">
																	<i class="icon-edit"></i>
															</button>
                                                        </td>
														<td class="center">注册时间</td>
														<td>1991.10.23</td>

														<td class="center">
															渠道来源
														</td>

														<td>
                                                        	平台自来
														</td>
													</tr>

													<tr>


														<td class="center">
															EMail
														</td>
														<td>946846782@qq.com
                                                        	<button class="btn btn-minier btn-info pull-right">
																	<i class="icon-edit"></i>
															</button>
                                                        </td>
														<td class="center">性别</td>
														<td>男</td>

														<td class="center">
															昵称
														</td>

														<td>
															小猪	
														</td>
													</tr>

													<tr>

														<td class="center">
															身份证
														</td>
														<td>440804199110230539
                                                        	<button class="btn btn-minier btn-info pull-right">
																	<i class="icon-edit"></i>
															</button>
                                                        </td>
														<td class="center">手机</td>
														<td>13229516845</td>

														<td class="center">
															QQ
														</td>

														<td>
															946846782
														</td>
													</tr>

													<tr>

														<td class="center">
															总充值
                                                            <span class="help-button" data-rel="popover" data-trigger="hover" data-placement="left" data-content="人民币(RMB)" title="" data-original-title="游戏充值单位">?</span>
														</td>
														<td>
                                                        	<span class="label label-warning arrowed arrowed-right">323</span>
                                                        </td>
														<td class="center">常规充值</td>
														<td>
                                                        	<span class="label label-sm label-info arrowed arrowed-righ">110</span>
                                                        </td>

														<td class="hidden-480">
															
														</td>


														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">

																<button class="btn btn-xs btn-info" data-rel="popover" data-trigger="hover" data-placement="right" data-content="资料修改" title="">
																	<i class="icon-edit bigger-120"></i>
																</button>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-cog icon-only bigger-110"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
												</div>
                                        	 </div>
                                                </div>
                                                
                                                
                                            </div>
										</div>
                           
                        </div>
                        
                        		<div class="space"></div>
                                
                                <div class="row">
                                	<div class="col-sm-12">
										<div class="tabbable">
											<ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
												<li class="active">
													<a data-toggle="tab" href="#home4">常规充值(10)</a>
												</li>

												<li class="">
													<a data-toggle="tab" href="#profile4">人工充值(10)</a>
												</li>

												<li class="">
													<a data-toggle="tab" href="#dropdown14">充值返利(10)</a>
												</li>
											</ul>

											<div class="tab-content">
												<div id="home4" class="tab-pane active">
													<table class="table table-striped table-bordered table-hover">
												<thead class="thin-border-bottom">
													<tr>
														<th class="center">订单号</th>
														<th class="center">游戏</th>
														<th class="center">服务器</th>
														<th class="center">充值时间</th>
														<th class="center">充值金额</th>
														<th class="center">元宝数</th>
														<th class="center">充值渠道</th>
                                                        <th class="center">充值到账</th>
                                                        <th class="center">游戏到账</th>
													</tr>
												</thead>

												<tbody>
													<tr>
														<td class="center">
														</td>
														<td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
                                                        <span class="label label-sm label-success">Registered</span>
                                                        </td>
														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
														</td>
														<td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>

														<td class="hidden-480">
															<span class="label label-sm label-success">Registered</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
														</td>
														<td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
														<td class="hidden-480">
															<span class="label label-sm label-warning">Expiring</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
														</td>
														<td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
														<td class="hidden-480">
															<span class="label label-sm label-inverse arrowed-in">Flagged</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
														</td>
														<td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>

														<td class="hidden-480">
															<span class="label label-sm label-success">Registered</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
														</td>
														<td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>

														<td class="hidden-480">
															<span class="label label-sm label-inverse arrowed-in">Flagged</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
														</td>
														<td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>

														<td class="hidden-480">
															<span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
														</td>
														<td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>

														<td class="hidden-480">
															<span class="label label-sm label-success">Registered</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
														</td>
														<td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>

														<td class="hidden-480">
															<span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
														</td>
														<td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>

														<td class="hidden-480">
															<span class="label label-sm label-warning">Expiring</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													

												</tbody>
											</table>
												</div>

												<div id="profile4" class="tab-pane">
													<table class="table table-bordered table-striped">
														<thead class="thin-border-bottom">
															<tr role="row">
																<th>
																	IP
																</th>

																<th>
																	WEB
																</th>

																<th>
																	地区
																</th>
                                                                
                                                                <th>
																	登录时间
																</th>
															</tr>
														</thead>

														<tbody>
															<tr role="row">
																<td>127.0.0.1</td>

																<td>
																	<img src="/webgame/Public/admin/images/browser/ie.png">
                                                                    IE
																</td>

																<td>
																	广州
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
                                                                
															</tr>
                                                            <tr role="row">
																<td>127.0.0.1</td>

																<td>
                                                                	<img src="/webgame/Public/admin/images/browser/chrome.png">
																	chrome
																</td>

																<td >
																	广州
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>
                                                            <tr role="row">
																<td>127.0.0.1</td>

																<td>
                                                                	<img src="/webgame/Public/admin/images/browser/firefox.png">
																	firefox
																</td>

																<td>
																	广州
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>
                                                            <tr role="row">
																<td>127.0.0.1</td>

																<td>
																	<img src="/webgame/Public/admin/images/browser/opera.png">
                                                                    opera
																</td>

																<td>
																	广州
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>
                                                            <tr role="row">
																<td>127.0.0.1</td>

																<td>
																	<img src="/webgame/Public/admin/images/browser/safari.png">
                                                                    safari
																</td>

																<td>
																	广州
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>
                                                            <tr role="row">
																<td>127.0.0.1</td>

																<td>
																	IE
																</td>

																<td>
																	广州
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>

															<tr role="row">
																<td>online.com</td>

																<td>
																	<small>
																		<s class="red"></s>
																	</small>
																	<b class="green">$16.45</b>
																</td>

																<td class="hidden-480">
																	<span class="label label-success arrowed-in arrowed-in-right">可用</span>
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>

															<tr role="row">
																<td>newnet.com</td>

																<td>
																	<small>
																		<s class="red"></s>
																	</small>
																	<b class="green">$15.00</b>
																</td>

																<td class="hidden-480">
																	<span class="label label-danger arrowed">待定</span>
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>

															<tr role="row">
																<td>web.com</td>

																<td>
																	<small>
																		<s class="red">$24.99</s>
																	</small>
																	<b class="green">$19.95</b>
																</td>

																<td class="hidden-480">
																	<span class="label arrowed">
																		<s>无货</s>
																	</span>
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>

															<tr role="row">
																<td>domain.com</td>

																<td>
																	<small>
																		<s class="red"></s>
																	</small>
																	<b class="green">$12.00</b>
																</td>

																<td class="hidden-480">
																	<span class="label label-warning arrowed arrowed-right">售完</span>
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>
														</tbody>
													</table>
												</div>

												<div id="dropdown14" class="tab-pane">
													<table class="table table-bordered table-striped">
														<thead class="thin-border-bottom">
															<tr role="row">
																<th>
																	IP
																</th>

																<th>
																	WEB
																</th>

																<th>
																	地区
																</th>
                                                                
                                                                <th>
																	登录时间
																</th>
															</tr>
														</thead>

														<tbody>
															<tr role="row">
																<td>127.0.0.1</td>

																<td>
																	<img src="/webgame/Public/admin/images/browser/ie.png">
                                                                    IE
																</td>

																<td>
																	广州
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
                                                                
															</tr>
                                                            <tr role="row">
																<td>127.0.0.1</td>

																<td>
                                                                	<img src="/webgame/Public/admin/images/browser/chrome.png">
																	chrome
																</td>

																<td >
																	广州
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>
                                                            <tr role="row">
																<td>127.0.0.1</td>

																<td>
                                                                	<img src="/webgame/Public/admin/images/browser/firefox.png">
																	firefox
																</td>

																<td>
																	广州
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>
                                                            <tr role="row">
																<td>127.0.0.1</td>

																<td>
																	<img src="/webgame/Public/admin/images/browser/opera.png">
                                                                    opera
																</td>

																<td>
																	广州
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>
                                                            <tr role="row">
																<td>127.0.0.1</td>

																<td>
																	<img src="/webgame/Public/admin/images/browser/safari.png">
                                                                    safari
																</td>

																<td>
																	广州
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>
                                                            <tr role="row">
																<td>127.0.0.1</td>

																<td>
																	IE
																</td>

																<td>
																	广州
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>

															<tr role="row">
																<td>online.com</td>

																<td>
																	<small>
																		<s class="red"></s>
																	</small>
																	<b class="green">$16.45</b>
																</td>

																<td class="hidden-480">
																	<span class="label label-success arrowed-in arrowed-in-right">可用</span>
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>

															<tr role="row">
																<td>newnet.com</td>

																<td>
																	<small>
																		<s class="red"></s>
																	</small>
																	<b class="green">$15.00</b>
																</td>

																<td class="hidden-480">
																	<span class="label label-danger arrowed">待定</span>
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>

															<tr role="row">
																<td>web.com</td>

																<td>
																	<small>
																		<s class="red">$24.99</s>
																	</small>
																	<b class="green">$19.95</b>
																</td>

																<td class="hidden-480">
																	<span class="label arrowed">
																		<s>无货</s>
																	</span>
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>

															<tr role="row">
																<td>domain.com</td>

																<td>
																	<small>
																		<s class="red"></s>
																	</small>
																	<b class="green">$12.00</b>
																</td>

																<td class="hidden-480">
																	<span class="label label-warning arrowed arrowed-right">售完</span>
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
                                </div>
                                
                                <div class="space"></div>
                                
                                <div class="row">
                                	<div class="col-sm-12">
										<div class="tabbable">
											<ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
												<li class="active">
													<a data-toggle="tab" href="#game4">参与游戏</a>
												</li>

												<li class="">
													<a data-toggle="tab" href="#login4">登录状况</a>
												</li>
											</ul>

											<div class="tab-content">
												<div id="game4" class="tab-pane active">
													<table class="table table-striped table-bordered table-hover">
												<thead class="thin-border-bottom">
													<tr>
														<th class="center">订单号</th>
														<th class="center">游戏</th>
														<th class="center">服务器</th>
														<th class="center">充值时间</th>
														<th class="center">充值金额</th>
														<th class="center">元宝数</th>
														<th class="center">充值渠道</th>
                                                        <th class="center">充值到账</th>
                                                        <th class="center">游戏到账</th>
													</tr>
												</thead>

												<tbody>
													<tr>
														<td class="center">
														</td>
														<td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
                                                        <span class="label label-sm label-success">Registered</span>
                                                        </td>
														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
														</td>
														<td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>

														<td class="hidden-480">
															<span class="label label-sm label-success">Registered</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
														</td>
														<td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
														<td class="hidden-480">
															<span class="label label-sm label-warning">Expiring</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
														</td>
														<td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
														<td class="hidden-480">
															<span class="label label-sm label-inverse arrowed-in">Flagged</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
														</td>
														<td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>

														<td class="hidden-480">
															<span class="label label-sm label-success">Registered</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
														</td>
														<td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>

														<td class="hidden-480">
															<span class="label label-sm label-inverse arrowed-in">Flagged</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
														</td>
														<td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>

														<td class="hidden-480">
															<span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
														</td>
														<td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>

														<td class="hidden-480">
															<span class="label label-sm label-success">Registered</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
														</td>
														<td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>

														<td class="hidden-480">
															<span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
														</td>
														<td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>
                                                        <td class="center">
														</td>

														<td class="hidden-480">
															<span class="label label-sm label-warning">Expiring</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													

												</tbody>
											</table>
												</div>

												<div id="login4" class="tab-pane">
													<table class="table table-bordered table-striped">
														<thead class="thin-border-bottom">
															<tr role="row">
																<th>
																	IP
																</th>

																<th>
																	WEB
																</th>

																<th>
																	地区
																</th>
                                                                
                                                                <th>
																	登录时间
																</th>
															</tr>
														</thead>

														<tbody>
															<tr role="row">
																<td>127.0.0.1</td>

																<td>
																	<img src="/webgame/Public/admin/images/browser/ie.png">
                                                                    IE
																</td>

																<td>
																	广州
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
                                                                
															</tr>
                                                            <tr role="row">
																<td>127.0.0.1</td>

																<td>
                                                                	<img src="/webgame/Public/admin/images/browser/chrome.png">
																	chrome
																</td>

																<td >
																	广州
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>
                                                            <tr role="row">
																<td>127.0.0.1</td>

																<td>
                                                                	<img src="/webgame/Public/admin/images/browser/firefox.png">
																	firefox
																</td>

																<td>
																	广州
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>
                                                            <tr role="row">
																<td>127.0.0.1</td>

																<td>
																	<img src="/webgame/Public/admin/images/browser/opera.png">
                                                                    opera
																</td>

																<td>
																	广州
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>
                                                            <tr role="row">
																<td>127.0.0.1</td>

																<td>
																	<img src="/webgame/Public/admin/images/browser/safari.png">
                                                                    safari
																</td>

																<td>
																	广州
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>
                                                            <tr role="row">
																<td>127.0.0.1</td>

																<td>
																	IE
																</td>

																<td>
																	广州
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>

															<tr role="row">
																<td>online.com</td>

																<td>
																	<small>
																		<s class="red"></s>
																	</small>
																	<b class="green">$16.45</b>
																</td>

																<td class="hidden-480">
																	<span class="label label-success arrowed-in arrowed-in-right">可用</span>
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>

															<tr role="row">
																<td>newnet.com</td>

																<td>
																	<small>
																		<s class="red"></s>
																	</small>
																	<b class="green">$15.00</b>
																</td>

																<td class="hidden-480">
																	<span class="label label-danger arrowed">待定</span>
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>

															<tr role="row">
																<td>web.com</td>

																<td>
																	<small>
																		<s class="red">$24.99</s>
																	</small>
																	<b class="green">$19.95</b>
																</td>

																<td class="hidden-480">
																	<span class="label arrowed">
																		<s>无货</s>
																	</span>
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>

															<tr role="row">
																<td>domain.com</td>

																<td>
																	<small>
																		<s class="red"></s>
																	</small>
																	<b class="green">$12.00</b>
																</td>

																<td class="hidden-480">
																	<span class="label label-warning arrowed arrowed-right">售完</span>
																</td>
                                                                
                                                                <td>
                                                                	2013-08-14 12:11:24
                                                                </td>
															</tr>
														</tbody>
													</table>
												</div>

												
											</div>
										</div>
									</div>
                                </div>
                                
                                <div class="space"></div>
                                
                                
                                
                        		
                                

								<!-- /row -->

								

								<!-- /row -->

								

								<!-- /row -->


								<!-- /row -->


								<!-- /row -->

								

								<script type="text/javascript">
									var $path_assets = "assets";//this will be used in gritter alerts containing images
								</script>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div>
						
						
      		
							
			
                        
                        
						<!-- /.row -->
                        
                        
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								Inside
								<b>.container</b>
							</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/webgame/Public/admin/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/webgame/Public/admin/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/webgame/Public/admin/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="/webgame/Public/admin/js/bootstrap.min.js"></script>
		<script src="/webgame/Public/admin/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="/webgame/Public/admin/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="/webgame/Public/admin/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/webgame/Public/admin/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/webgame/Public/admin/js/chosen.jquery.min.js"></script>
		<script src="/webgame/Public/admin/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="/webgame/Public/admin/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="/webgame/Public/admin/js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="/webgame/Public/admin/js/date-time/moment.min.js"></script>
		<script src="/webgame/Public/admin/js/date-time/daterangepicker.min.js"></script>
		<script src="/webgame/Public/admin/js/bootstrap-colorpicker.min.js"></script>
		<script src="/webgame/Public/admin/js/jquery.knob.min.js"></script>
		<script src="/webgame/Public/admin/js/jquery.autosize.min.js"></script>
		<script src="/webgame/Public/admin/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="/webgame/Public/admin/js/jquery.maskedinput.min.js"></script>
		<script src="/webgame/Public/admin/js/bootstrap-tag.min.js"></script>

		<!-- page specific plugin scripts -->

		<script src="/webgame/Public/admin/js/jquery.dataTables.min.js"></script>
		<script src="/webgame/Public/admin/js/jquery.dataTables.bootstrap.js"></script>

		<!-- ace scripts -->

		<script src="/webgame/Public/admin/js/ace-elements.min.js"></script>
		<script src="/webgame/Public/admin/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
				$(".chosen-select").chosen(); 
				$('#chosen-multiple-style').on('click', function(e){
					var target = $(e.target).find('input[type=radio]');
					var which = parseInt(target.val());
					if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
					 else $('#form-field-select-4').removeClass('tag-input-style');
				});
			
			
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
				
				$('textarea[class*=autosize]').autosize({append: "\n"});
				$('textarea.limited').inputlimiter({
					remText: '%n character%s remaining...',
					limitText: 'max allowed : %n.'
				});
			
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			
			
			
				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 8,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 12,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
					}
				});
				
				
				$( "#slider-range" ).css('height','200px').slider({
					orientation: "vertical",
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1]+"";
			
						if(! ui.handle.firstChild ) {
							$(ui.handle).append("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('a').on('blur', function(){
					$(this.firstChild).hide();
				});
				
				$( "#slider-range-max" ).slider({
					range: "max",
					min: 1,
					max: 10,
					value: 2
				});
				
				$( "#eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true
						
					});
				});
			
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				
				$('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
			
				//dynamically change allowed formats by changing before_change callback function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var before_change
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "icon-picture";
						before_change = function(files, dropped) {
							var allowed_files = [];
							for(var i = 0 ; i < files.length; i++) {
								var file = files[i];
								if(typeof file === "string") {
									//IE8 and browsers that don't support File Object
									if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
								}
								else {
									var type = $.trim(file.type);
									if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
											|| ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
										) continue;//not an image so don't keep this file
								}
								
								allowed_files.push(file);
							}
							if(allowed_files.length == 0) return false;
			
							return allowed_files;
						}
					}
					else {
						btn_choose = "Drop files here or click to choose";
						no_icon = "icon-cloud-upload";
						before_change = function(files, dropped) {
							return files;
						}
					}
					var file_input = $('#id-input-file-3');
					file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
					file_input.ace_file_input('reset_input');
				});
			
			
			
			
				$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});
				$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'icon-caret-up', icon_down:'icon-caret-down'});
				$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'icon-plus smaller-75', icon_down:'icon-minus smaller-75', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
			
			
				
				$('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				$('input[name=date-range-picker]').daterangepicker().prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
				
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				$('#colorpicker1').colorpicker();
				$('#simple-colorpicker-1').ace_colorpicker();
			
				
				$(".knob").knob();
				
				
				//we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
				var tag_input = $('#form-field-tags');
				if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
				{
					tag_input.tag(
					  {
						placeholder:tag_input.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
					  }
					);
				}
				else {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//$('#form-field-tags').autosize({append: "\n"});
				}
				
				
				
			
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('shown.bs.modal', function () {
					$(this).find('.chosen-container').each(function(){
						$(this).find('a:first-child').css('width' , '210px');
						$(this).find('.chosen-drop').css('width' , '210px');
						$(this).find('.chosen-search input').css('width' , '200px');
					});
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element becomes visible with dimensions and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/
			
			});
		</script>

</body>
</html>