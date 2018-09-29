<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>吃了么小课堂</title>
<link rel="stylesheet" type="text/css" href="/home/news/css/style.css" />
<script src="/home/news/js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
</head>

<body>
<div class="bg-grey" >
	<div class="content">
		<a href="#">
			<h2 class="title">吃了么小课堂</h2></a>
		<p class="subtitle">为您提供生活中的饮食常识和养生食谱等.</p>
		<div class="tab-block information-tab">

			<div class="tab-buttons">
				<span></span>
				<span class="tab-button" name="title" data-tab="two">{{$news['title']}}</span>
			</div>
			<div class="tabs">
				<div class="tab-item active" id="tab-one" style="height:500px;">
					<div class="information-tab">

						<div class="information-left">
							<a href="#">
								<img src="{{$news['img']}}" width="500" height="340" alt="">
							</a>
							<div class="left-bottom">
								<div class="article-title"></div>
								<div class="article-time">
									{{$news['created_at']}}
								</div>
							</div>
						</div>
						<div class="information-right">
							<div class="article-list current">
								<a href="#" class="article-link">
										<p>{!!$news['content']!!}</p>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-item" id="tab-two">
					<div class="information-tab ">

						<div class="information-left">
							<a href="#">
								<img src="statics/images/2.png" width="500" height="340" alt="网上商城开发公司开辟社交应用的新商机">
							</a>
							<div class="left-bottom">
								<div class="article-title">网上商城开发公司开辟社交应用的新商机</div>
								<div class="article-time">
									[02-27 ]
								</div>
							</div>
						</div>
						<div class="information-right">
							<div class="article-list current">
								<a href="#" class="article-link">
									<div class="article-head ">
										<span class="article-number">1</span>
										<span class="article-title">简述B2B电子商务订货平台的几大基本功能</span>
										<span class="article-time">[12-05]</span>
									</div>
									<div class="article-content">
										<p>B2B电商的发展势头非常猛烈，在当下想要成功经营一个B2B电商是一件非常具有挑战的事情，B2B电商订货平台正是企业凤凰涅槃的机会，下面数商云小编就来简单说说B2B电子商务订货平台的几大基本功能。</p>
									</div>
								</a>
							</div>

							<div class="article-list ">
								<a href="#" class="article-link">
									<div class="article-head ">
										<span class="article-number">2</span>
										<span class="article-title">电子商务商城网站营销策略，从产品定价开始</span>
										<span class="article-time">[09-21]</span>
									</div>
									<div class="article-content">
										<p>说到电子商务定价，电商平台建设公司【数商云】开发经理kay表示，不妨充分考虑五大方面：影响定价的因素、产品的目标价格定位，定价的基本策略。</p>
									</div>
								</a>
							</div>

							<div class="article-list ">
								<a href="#" class="article-link">
									<div class="article-head ">
										<span class="article-number">3</span>
										<span class="article-title">制造业转型，工业品电商的创新发展之路</span>
										<span class="article-time">[07-03]</span>
									</div>
									<div class="article-content">
										<p>5月25日，由中国电子商务协会B2B行业分会提供战略指导，B2B行业专业媒体托比网主办的中国首届“工业+互联网”高峰论坛在上海举行。本届高峰论坛以 “新模式、新通路、新变革”为主题......</p>
									</div>
								</a>
							</div>

							<div class="article-list ">
								<a href="#" class="article-link">
									<div class="article-head ">
										<span class="article-number">4</span>
										<span class="article-title">跨境电商平台搭建之站内站外营销</span>
										<span class="article-time">[09-20]</span>
									</div>
									<div class="article-content">
										<p>跨境电商平台搭建好之后，跨境电商平台的站内营销和站外营销成为很重要的工作部分。相信不少的电商平台商家可能都没有站外站内营销的概念，正好今天【数商云】小编就整理了电子商务平台建设的站内站外营销干货，供给搭建跨境电商平台解决方案的运营参考。</p>
									</div>
								</a>
							</div>

							<div class="article-list ">
								<a href="#" class="article-link">
									<div class="article-head ">
										<span class="article-number">5</span>
										<span class="article-title">好的商城网站系统需要进行维护</span>
										<span class="article-time">[12-08]</span>
									</div>
									<div class="article-content">
										<p>电商行业发展也有一定年头了，行业内的商城网站也是星罗棋布，各类商城网站充斥者我们的眼球，一个商城网站得以生存总有他的道理，存在即合理，当然一些商城网站逐渐退出了我们的实现，在竞争中被淘汰，那么一个好的商城系统需要对它进行怎么的维护呢？才能保证其...</p>
									</div>
								</a>
							</div>

						</div>
					</div>
				</div>
				<div class="tab-item" id="tab-three">
					<div class="information-tab ">

						<div class="information-left">
							<a href="#">
								<img src="statics/images/3.png" width="500" height="340" alt="优秀的网上商城系统网站介绍">
							</a>
							<div class="left-bottom">
								<div class="article-title">优秀的网上商城系统网站介绍</div>
								<div class="article-time">
									[12-04 ]
								</div>
							</div>
						</div>
						<div class="information-right">
							<div class="article-list current">
								<a href="#" class="article-link">
									<div class="article-head ">
										<span class="article-number">1</span>
										<span class="article-title">如何制作一个电子商务平台系统？</span>
										<span class="article-time">[11-07]</span>
									</div>
									<div class="article-content">
										<p>大致的流程如下，以电商平台开发公司【数商云】为例子，在实际项目往往会涉及到人与人之间的复杂沟通以及协作，所以需要有严谨的管理规范以及弹性的流程控制才能达到较高水准的项目质量。</p>
									</div>
								</a>
							</div>

							<div class="article-list ">
								<a href="#" class="article-link">
									<div class="article-head ">
										<span class="article-number">2</span>
										<span class="article-title">开发一个电子商务网站，需要运用哪些设计原则</span>
										<span class="article-time">[03-21]</span>
									</div>
									<div class="article-content">
										<p>随着目前电子商务网站开发技术的迭代，电商网站的交互设计得到了很大程度的提升，可以认为现在的新型的商城平台都呈现出交互效果。由此可以引发一个思考，电商系统网站开发的交互设计原则、基础是什么？</p>
									</div>
								</a>
							</div>

							<div class="article-list ">
								<a href="#" class="article-link">
									<div class="article-head ">
										<span class="article-number">3</span>
										<span class="article-title">传统企业转型建设独立B2C电商平台_会面临什么问题？</span>
										<span class="article-time">[09-20]</span>
									</div>
									<div class="article-content">
										<p>传统企业电子商务平台建设公司【数商云】市场总监在这里分享提出一些B2C企业内部运营（主要是订单处理流程方面）所面临的问题：</p>
									</div>
								</a>
							</div>

							<div class="article-list ">
								<a href="#" class="article-link">
									<div class="article-head ">
										<span class="article-number">4</span>
										<span class="article-title">什么是社区电商平台？社区电商达人教路</span>
										<span class="article-time">[09-16]</span>
									</div>
									<div class="article-content">
										<p>通过社区电商达人了解到，最先发展起社区电商的是一些物业，以及拥有社区资源的企业。他们有一个共同点都属于传统型企业，想把一个社区电商平台运营好。</p>
									</div>
								</a>
							</div>

							<div class="article-list ">
								<a href="#" class="article-link">
									<div class="article-head ">
										<span class="article-number">5</span>
										<span class="article-title">电子商务网店系统开发，重视要点总结！</span>
										<span class="article-time">[09-21]</span>
									</div>
									<div class="article-content">
										<p>【数商云】为企业定制专属的电商网站时，发现很多电商企业在沟通过程多次强调要设计开发出一个热点十足，够噱头的电商平台，这类型的电商网站开发设计方面确实够噱头了，但不是建立在用户体验的基础上，忽略了用户的感官视角。</p>
									</div>
								</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	//tab切换		
	$('.tab-button').click(function() {
		var tab = $(this).data('tab')
		$(this).addClass('cur').siblings('.tab-button').removeClass('cur');
		$('#tab-' + tab + '').addClass('active').siblings('.tab-item').removeClass('active');
	});
	//新闻列表切换
	$('.information-tab .article-list').hover(function() {
		$(this).addClass('current').siblings('.article-list').removeClass('current');
	}, function() {
		$(this).parent('.information-right').find('.article-list:first-of-type').addClass('current').siblings('.article-list').removeClass('current');
	});
</script>

</body>
</html>