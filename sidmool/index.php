<?php include('./inc/head.top.php');   ?>
</head>


<body>
    <!-- header -->
    <?php include('./inc/header.php');?>
    <!-- banner -->
    <section class="banner content">
        <?php include('./main/banner.php');?>
    </section>
    <!-- /banner -->
    <!-- 시드물 입소문 제품 -->
    <section class="product_area">
        <div class="inner">
            <div class="title_bar">
                <h3>시드물 입소문 제품</h3>
                <a href="#">전체보기</a>
            </div>
            <?php include('./main/productlist.php');  ?>
        </div>
    </section>
    <!-- /시드물 입소문 제품 -->
    <!-- 데일리 추천 -->
    <section class="daily">
        <div class="inner">
            <div>
                <h3>데일리 추천</h3>
            </div>
            <div class="product">
                <div class="left">
                    <div class="box">
                        <div class="back_img">
                            <img src="/portfolio/sidmool/assets/images/daily_3.png" alt="피토 피디알엔 리페어 크림">
                        </div>
                        <div class="product_img">
                            <img src="/portfolio/sidmool/assets/images/pdrn.png" alt="피토 피디알엔 리페어 크림">
                        </div>
                    </div>
                    <div class="product_info">
                        <h6>
                            <p>‘물고기’ 대신 ‘센텔라아시아티카 ’에서 추출한</p>
                            피토 피디알엔 리페어 크림
                        </h6>
                        <div class="hash_tag">
                            <p>#주름 개선 # 탄력 케어 # 푸석한 피부 #약산성</p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="top">
                        <div class="product_img">
                            <img src="/portfolio/sidmool/assets/images/daily_5.png" alt="울트라 페이셜 저분자 히알루론산 크림">
                        </div>
                        <div class="product_info">
                            <div class="hash_tag">
                                <p>
                                    <span>#수분 충전 크림</span> <span>#푸른빛</span>
                                </p>
                            </div>
                            <h6>
                                <p>수분감 팡팡 끈적임 없이 산뜻하고 깔끔한</p>
                                울트라 페이셜<br>저분자 히알루론산 크림
                            </h6>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="product_img">
                            <img src="/portfolio/sidmool/assets/images/daily_6.png" alt="어성초 수분 크림">
                        </div>
                        <div class="product_info">
                            <div class="hash_tag">
                                <p>
                                    <span>#수분 충전 크림</span> <span>#진정 케어</span>
                                </p>
                            </div>
                            <h6>
                                <p>민감한 문제성 피부에도 편안한 산뜩 촉촉</p>
                                어성초 수분 크림
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /데일리 추천 -->
    <!-- 시드물 솔루션 -->
    <section class="solution">
        <div class="inner">
            <div class="left">
                <h5>
                    <b>sidmool</b>
                    <span>solution</span>
                </h5>
                <p>
                    고객님들의 고민 해결을 위해 <br>시드물이 추천하는 솔루션
                </p>
                <div class="show_all">
                    <a href="#">전체보기
                        <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 9.5H20M20 9.5L9.21569 1M20 9.5L9.21569 18" stroke="black" stroke-width="2"/>
                        </svg>
                    </a>
                </div>
                <!-- <div class="slide-nav">
                    <button type="button" role="presentation" class="prev">
                        <span aria-label="Previous">‹</span>
                    </button>
                    <button type="button" role="presentation" class="next">
                        <span aria-label="Next">›</span>
                    </button>
                </div> -->
            </div>
            <div class="right">
                <?php include('./main/solution.php'); ?>
            </div>
        </div>
    </section>
    <!-- /시드물 솔루션 -->
    <!-- footer nav -->
        <section class="sitemap">
            <nav>
                <ul>
                    <li>
                        시드물 소개
                        <ul>
                            <li><a href="#">개요/연혁/소개</a></li>
                            <li><a href="#">개발 및 품질관리</a></li>
                            <li><a href="#">시드물 오시는 길</a></li>
                            <li><a href="#">공지사항</a></li>
                            <li><a href="#">시드물 통신</a></li>
                            <li><a href="#">동영상게시판</a></li>
                        </ul>
                    </li>
                    <li>
                        커뮤니티
                        <ul>
                            <li><a href="#">포토후기</a></li>
                            <li><a href="#">사용후기</a></li>
                            <li><a href="#">시사모 자유게시판</a></li>
                            <li><a href="#">시드물 매니아</a></li>
                        </ul>
                    </li>
                    <li>
                        시드물 제품안내
                        <ul>
                            <li><a href="#">성분사전</a></li>
                            <li><a href="#">신제품 리스트</a></li>
                            <li><a href="#">제품 전체보기</a></li>
                        </ul>
                    </li>
                    <li>
                        마이페이지
                        <ul>
                            <li><a href="#">주문내역/배송조회</a></li>
                            <li><a href="#">적립금내역</a></li>
                            <li><a href="#">할인 쿠폰 내역</a></li>
                            <li><a href="#">1:1문의 게시판</a></li>
                            <li><a href="#">나의 게시글 보기</a></li>
                        </ul>
                    </li>
                    <li>
                        고객센터
                        <ul>
                            <li><a href="#">시드물 공지사항</a></li>
                            <li><a href="#">자주 묻는 질문</a></li>
                            <li><a href="#">전 어떻게 쓰나요?</a></li>
                            <li><a href="#">미확인 입금</a></li>
                            <li><a href="#">해외배송 게시판</a></li>
                        </ul>
                    </li>
                    <li>
                        쇼핑지원
                        <ul>
                            <li><a href="#">내 장바구니</a></li>
                            <li><a href="#">위시리스트</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </section>
    <!-- /footer nav -->
    <!-- footer -->
    <footer>
        <div class="line_up"></div>
        <div class="bottom_info">
            <div class="logo">
                <h2>
                    <span>SIDMOOL</span>
                    <span>시 드 물</span>
                </h2>
            </div>
            <div class="info">
                <dl>
                    <dt>상호 :</dt>
                    <dd>주식회사 시드물</dd>
                </dl>
                <dl>
                    <dt>주소 :</dt>
                    <dd>우)35083 대전광역시 중구 안영로(안영동)</dd>
                </dl>
                <dl>
                    <dt>전화 :</dt>
                    <dd>1577-9638 (해외 : +82-42-716-0227)</dd>
                </dl>
                <dl>
                    <dt>팩스 :</dt>
                    <dd>042-367-7989</dd>
                </dl>
                <dl>
                    <dt>사업자등록번호 :</dt>
                    <dd>305-81-94469</dd>
                </dl>
                <dl>
                    <dt>건강기능식품판매업 :</dt>
                    <dd>대전 중구 제503</dd>
                </dl>
                <dl>
                    <dt>통신판매업신고번호 : </dt>
                    <dd>제2008-대전중구-0247호</dd>
                </dl>
                <dl>
                    <dt>화장품 제조판매업 등록필증 :</dt>
                    <dd>제 1163호</dd>
                </dl>
                <dl>
                    <dt>서비스개선 :</dt>
                    <dd>help@sidmool.com</dd>
                </dl>
                <dl>
                    <dt>대표 :</dt>
                    <dd>민병권</dd>
                </dl>
                <dl>
                    <dt>개인정보책임자 :</dt>
                    <dd>박소진</dd>
                </dl>
                <div class="copyright">
                    <p>copyright © 2008 sidmool all rights reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->
</body>


</html>