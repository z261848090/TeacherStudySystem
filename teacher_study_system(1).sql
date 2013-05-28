-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2013 年 05 月 27 日 10:03
-- 服务器版本: 5.5.27
-- PHP 版本: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `teacher_study_system`
--

-- --------------------------------------------------------

--
-- 表的结构 `tss_course`
--

CREATE TABLE IF NOT EXISTS `tss_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text COMMENT '课程简介',
  `create_time` int(11) DEFAULT NULL COMMENT '新增日期',
  `department` varchar(255) DEFAULT NULL COMMENT '课程所属年级',
  `subject` varchar(255) DEFAULT NULL COMMENT '课程所属学科',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='记录每个教师的课程名称、所属年级、所属学科等信息。' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `tss_course`
--

INSERT INTO `tss_course` (`id`, `title`, `description`, `create_time`, `department`, `subject`) VALUES
(1, '语文', '一般而言，语文是语言和文字、语言和文学的简约式统称。语文是听、说、读、写、译、编等语言文字的能力和语言知识及文化知识的统称。语文能力是学习其他学科和科学的基础，也是一门重要的人文社会科学（学科），是人们相互交流思想等的工具。哲学认为语文是进行表述、记录、传递口头或书面信息的文字言词的物质存在形式；语文是描述事实、引证思维、陈述思想、表达意志、抒发情怀以及改造事物和思想的信息定位的一种意识存在内容。《语文》也是中国的学校等教育机构开设的一门主要学科，中国语文教科书一般讲授的是汉语文。', NULL, '人文与法学院', '人文部'),
(2, '高等数学', '数学源自于古希腊，是研究数量、结构、变化以及空间模型等概念的一门科学。透过抽象化和逻辑推理的使用，由计数、计算、量度和对物体形状及运动的观察中产生。数学的基本要素是：逻辑和直观、分析和推理、共性和个性。', NULL, '理学院', '数学组'),
(3, '计算机', '计算机（Computer）俗称电脑，是一种能够按照程序运行，自动、高速处理海量数据的现代化智能电子设备。由硬件系统和软件系统所组成，没有安装任何软件的计算机称为裸机。可分为超级计算机、工业控制计算机、网络计算机、个人计算机、嵌入式计算机五类，较先进的计算机有生物计算机、光子计算机、量子计算机等。', NULL, '计算机学院', '计算机组'),
(4, '大学英语', '英语（English）是联合国的工作语言之一，也是事实上的国际交流语言。英语属于印欧语系中日耳曼语族下的西日耳曼语支，并通过英国的殖民活动传播到世界各地。由于在历史上曾和多种民族语言接触，它的词汇从一元变为多元，语法从“多屈折”变为“少屈折”，语音也发生了规律性的变化。根据以英语作为母语的人数计算，英语可能是世界上第三大语言，但它是世界上最广泛的第二语言。世界上60%以上的信件是用英语书写的，上两个世纪英国和美国在文化、经济、军事、政治和科学上的领先地位使得英语成为一种准国际语言。', NULL, '外国语学院', '英语组'),
(5, '电子商务', '《经济管理》是中国社会科学院的一份以管理学为主要研究对象的学术月刊。内容涵盖经济学、管理学两大学科门类，致力在工商管理一级学科及其紧密相关的应用经济学若干专业体现中国水平。', NULL, '管理学院', '经济管理组'),
(6, '体育', '体育一词，其英文本是Physical education，指的是以身体活动为手段的教育，直译为身体的教育，简称为体育。随着国际交往的扩大，体育事业发展的规模和水平已是衡量一个国家、社会发展进步的一项重要标志，也成为国家间外交及文化交流的重要手段。体育可分为大众体育、专业体育、学校体育等种类。包括体育文化、体育教育、体育活动、体育竞赛、体育设施、体育组织、体育科学技术等诸多要素。', NULL, '体育教学部', '体育组');

-- --------------------------------------------------------

--
-- 表的结构 `tss_department`
--

CREATE TABLE IF NOT EXISTS `tss_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '部门名称',
  `description` varchar(255) DEFAULT NULL COMMENT '部门描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='部门' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `tss_department`
--

INSERT INTO `tss_department` (`id`, `title`, `description`) VALUES
(1, '人文与法学院', '人文与法学院于2012年6月在原人文学院、思想政治理论教学部基础上分设成立。人文学院、思想政治理论教学部前身是人文学院（于2002年成立）。学院自2002年开始招收本科生，现有法学系、文化传播系两个系，法学、社会学、编辑出版学三个本科专业。学院有良好的科研、实验平台，下设法制与社会发展研究所、文学与编辑研究所等科研机构，拥有省财政专项社会学专业实验室、模拟法庭实验室、人文学院专业实验室。       \r\n\r\n学院拥有一支结构合理、素质优良的教师队伍，现有专任教师30余人，其中教授8人，副教授15人，50%'),
(2, '计算机学院', '计算机学院是在1980年设立的本科计算机专业的基础上发展起来的。1980年9月开始面向全国招收了第一批计算机应用专业本科生，1981年开始招收计算机应用技术硕士研究生。1984年5月设立的电子计算机系。2000年7月，为适应信息学科快速发展的需要，成立计算机学院。2001年7月，经浙江省教育厅批准，以计算机学院为依托，成立浙江省省属高校第一家软件学院。2002年7月软件学院独立建制。2004年10月，计算机学院与软件学院合并，组成新的计算机学院。\r\n\r\n　　1993年获得计算机应用技术硕士学位授予权，19'),
(3, '自动化学院', '自动化学院成立于2000年，其前身是1985年成立的机器人研究室和1994年成立的自动化系。学院现有1个一级学科博士学位授予权立项建设点、1个一级学科硕士点、5个二级学科硕士点；1个浙江省重中之重一级学科、1个国防特色主干学科、1个原信息产业部重点学科。有自动化、电气工程与自动化、电气信息工程3个本科专业，其中1个国防特色重点专业、2个浙江省“十二五”优势专业、2个浙江省重点建设专业；有1个教育部工程研究中心、1个国防重点学科实验室，是浙江省工业自动化创新平台核心成员单位；有1个国家财政部资助重点实验室、'),
(4, '外国语学院', '1.学院概况：杭州电子科技大学外国语学院是一个理工科类院校中特色明显、优势突出的外语教学与研究单位。学院现有“英语语言文学”二级学科硕士学位授权点、英语省级重点专业、《英美文学导论》和《大学英语》省级精品课程、省级外语实验教学示范中心;设有英美文学研究所、外国语语言学及应用语言学研究所和翻译学研究所。英语专业开设课程覆盖“英语语言文学”、“商务英语”、“翻译(口译)”和“英语教学”等学科方向。此外，外国语学院负责全校各专业研究生、本科生公共英语教学，并开设了全校性的日语、德语和法语等选修课程。\r\n\r\n2.'),
(5, '管理学院', '管理学院1980年开始招收本科生，1981年招收研究生。现有本科生、研究生2000余人。学院拥有管理科学与工程、工商管理2个一级学科硕士学位授权点，其中管理科学与工程为信息产业部重点学科和浙江省重点学科，招收管理科学与工程、企业管理、技术经济与管理、旅游管理等4个二级硕士学位点的研究生；同时开展了项目管理、物流工程、工业工程三个授权领域的工程硕士培养。学院设有信息管理与信息系统、工商管理、市场营销、人力资源管理、电子商务、物流管理、工业工程等7个本科专业，其中，工商管理、市场营销、人力资源管理三个专业20'),
(6, '理学院', '学院以数学、物理为基础，依托学校电子信息优势，坚持严谨的基础教学、有特色的专业教学，走理工融合的学科发展道路。学院设有数学研究所、应用数学与工程计算研究所、运筹与控制研究所、能源研究所和光学研究所。现有数学和统计学（与经贸学院联合）两个一级学科硕士点，能源机械装备及其自动化和光电信息技术及仪器两个二级学科硕士点；有信息与计算科学、数学与应用数学、应用物理学、光信息科学与技术四个本科专业。数学一级学科是浙江省“十二五”重点学科（全省仅有三个数学一级学科入选），信息与计算科学专业是浙江省“十二五”优势专业（该'),
(7, '体育教学部', '体育与艺术');

-- --------------------------------------------------------

--
-- 表的结构 `tss_resource_file`
--

DROP TABLE IF EXISTS `tss_resource_file`;
CREATE TABLE `tss_resource_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '文件名称',
  `extension` varchar(255) DEFAULT NULL COMMENT '文件后缀名',
  `user_name` varchar(100) DEFAULT NULL COMMENT '文件夹Id',
  `create_time` datetime DEFAULT NULL COMMENT '创建时间',
  `size` int(11) DEFAULT NULL COMMENT '文件大小',
  `department` int(11) DEFAULT NULL COMMENT '所属部门',
  `subject` int(11) DEFAULT NULL COMMENT '所属学科',
  `describe` varchar(1000) DEFAULT NULL COMMENT '文件类型Id',
  `url` varchar(255) DEFAULT NULL COMMENT '文件url地址',
  `hits` int(100) DEFAULT NULL COMMENT '是否共享',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COMMENT='资源文件夹';

-- --------------------------------------------------------

--
-- 表的结构 `tss_resource_file_type`
--

CREATE TABLE IF NOT EXISTS `tss_resource_file_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文件类型' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tss_resource_folder`
--

CREATE TABLE IF NOT EXISTS `tss_resource_folder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `folder` varchar(255) DEFAULT NULL COMMENT '文件夹名称',
  `parent_id` int(11) DEFAULT NULL COMMENT '父级文件夹Id',
  `index` int(11) DEFAULT NULL COMMENT '文件夹层次',
  `share` bit(1) DEFAULT NULL COMMENT '是否共享',
  `user_id` int(11) DEFAULT NULL COMMENT '教师ID',
  `create_time` int(11) DEFAULT NULL COMMENT '新增时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='资源文件夹' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tss_subcourse`
--

CREATE TABLE IF NOT EXISTS `tss_subcourse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '课程子栏目名称',
  `type_id` varchar(255) DEFAULT NULL COMMENT '课程子栏目类型ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='课程子栏目表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tss_subcourse_type`
--

CREATE TABLE IF NOT EXISTS `tss_subcourse_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '课程子栏目类型名称',
  `url` varchar(255) DEFAULT NULL COMMENT '课程子栏目类型模板URl',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='课程子栏目类型表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tss_subject`
--

CREATE TABLE IF NOT EXISTS `tss_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='学科表' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `tss_subject`
--

INSERT INTO `tss_subject` (`id`, `title`, `description`) VALUES
(1, '语文组', '一般而言，语文是语言和文字、语言和文学的简约式统称。语文是听、说、读、写、译、编等语言文字的能力和语言知识及文化知识的统称。语文能力是学习其他学科和科学的基础，也是一门重要的人文社会科学（学科），是人们相互交流思想等的工具。哲学认为语文是进行表述、记录、传递口头或书面信息的文字言词的物质存在形式；语文是描述事实、引证思维、陈述思想、表达意志、抒发情怀以及改造事物和思想的信息定位的一种意识存在内容。《语文》也是中国的学校等教育机构开设的一门主要学科，中国语文教科书一般讲授的是汉语文。'),
(2, '数学组', '数学源自于古希腊，是研究数量、结构、变化以及空间模型等概念的一门科学。透过抽象化和逻辑推理的使用，由计数、计算、量度和对物体形状及运动的观察中产生。数学的基本要素是：逻辑和直观、分析和推理、共性和个性。'),
(3, '英语组', '英语（English）是联合国的工作语言之一，也是事实上的国际交流语言。英语属于印欧语系中日耳曼语族下的西日耳曼语支，并通过英国的殖民活动传播到世界各地。由于在历史上曾和多种民族语言接触，它的词汇从一元变为多元，语法从“多屈折”变为“少屈折”，语音也发生了规律性的变化。根据以英语作为母语的人数计算，英语可能是世界上第三大语言，但它是世界上最广泛的第二语言。世界上60%以上的信件是用英语书写的，上两个世纪英国和美国在文化、经济、军事、政治和科学上的领先地位使得英语成为一种准国际语言。'),
(4, '物理组', '物理指事物的内在规律，事物的道理。\r\n物理学是研究物质结构、物质相互作用和运动规律的自然科学，是一门以实验为基础的自然科学，物理学的一个永恒主题是寻找各种序（Orders）、对称性（Symmetry）和对称破缺（Symmetry-breaking）、守恒律（Conservation laws）或不变性（Invariance）。'),
(5, '经济管理组', '《经济管理》是中国社会科学院的一份以管理学为主要研究对象的学术月刊。内容涵盖经济学、管理学两大学科门类，致力在工商管理一级学科及其紧密相关的应用经济学若干专业体现中国水平。'),
(6, '体育组', '体育一词，其英文本是Physical education，指的是以身体活动为手段的教育，直译为身体的教育，简称为体育。随着国际交往的扩大，体育事业发展的规模和水平已是衡量一个国家、社会发展进步的一项重要标志，也成为国家间外交及文化交流的重要手段。体育可分为大众体育、专业体育、学校体育等种类。包括体育文化、体育教育、体育活动、体育竞赛、体育设施、体育组织、体育科学技术等诸多要素。'),
(7, '艺术组', '1、亦作“蓺术”，古代指六艺以及术数方技等各种技能。 2、特指经术， 清方苞《答申谦居书》：“艺术莫难於古文，自周 以来，各自名家者，仅十数人，则其艰可知也。” 3、通过塑造形象以反映社会生活而比现实更有典型性的一种社会意识形态，如文学、绘画、雕塑、音乐、舞蹈、戏剧、电影、曲艺、建筑等。 4、比喻富有创造性的语言、方式、方法及事物， 毛泽东 《发刊词》：“党创造了坚强的武装部队，因此也就学会了战争的艺术。” 5、谓形象独特优美，内容丰富多彩。'),
(8, '人文组', '人文就是人类文化中的先进部分和核心部分，即先进的价值观及其规范。其集中体现是，重视人，尊重人，关心人爱护人。简而言之，人文，即重视人的文化。'),
(9, '自动化组', '自动化（Automation）是指机器设备、系统或过程（生产、管理过程）在没有人或较少人的直接参与下，按照人的要求，经过自动检测、信息处理、分析判断、操纵控制，实现预期的目标的过程。自动化技术广泛用于工业、农业、军事、科学研究、交通运输、商业、医疗、服务和家庭等方面。采用自动化技术不仅可以把人从繁重的体力劳动、部分脑力劳动以及恶劣、危险的工作环境中解放出来，而且能扩展人的器官功能，极大地提高劳动生产率，增强人类认识世界和改造世界的能力。因此，自动化是工业、农业、国防和科学技术现代化的重要条件和显著标志。'),
(10, '计算机组', '计算机（Computer）俗称电脑，是一种能够按照程序运行，自动、高速处理海量数据的现代化智能电子设备。由硬件系统和软件系统所组成，没有安装任何软件的计算机称为裸机。可分为超级计算机、工业控制计算机、网络计算机、个人计算机、嵌入式计算机五类，较先进的计算机有生物计算机、光子计算机、量子计算机等。');

-- --------------------------------------------------------

--
-- 表的结构 `tss_user`
--

CREATE TABLE IF NOT EXISTS `tss_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL COMMENT '用户名',
  `email` varchar(255) NOT NULL COMMENT '邮箱',
  `password` varchar(255) NOT NULL,
  `gender` varchar(100) DEFAULT NULL COMMENT '性别',
  `description` varchar(1000) DEFAULT NULL COMMENT '个人资料介绍',
  `permission` int(10) DEFAULT '0' COMMENT '权限',
  `create_time` datetime DEFAULT NULL COMMENT '新增时间',
  `department_id` int(10) DEFAULT NULL COMMENT '部门Id',
  `birthday` date DEFAULT NULL,
  `degree` varchar(100) DEFAULT NULL,
  `identity` varchar(100) DEFAULT NULL,
  `nation` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `subject_id` int(10) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `titles` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `tss_user`
--

INSERT INTO `tss_user` (`id`, `username`, `email`, `password`, `gender`, `description`, `permission`, `create_time`, `department_id`, `birthday`, `degree`, `identity`, `nation`, `phone`, `position`, `subject_id`, `tel`, `titles`) VALUES
(0, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '', 1, '2013-05-27 10:00:32', 0, '0000-00-00', '', '', '', '', '', 0, '', ''),
(1, '朱国晖', 'ynxyzgh123@sina.com', 'e10adc3949ba59abbe56e057f20f883e', '男', '大学本科生一个', 0, '2013-05-27 07:46:40', 7, '1990-06-14', '本科大学', '53292319900614003X', '汉', '13858144745', '超级', 6, '0872-3120869', '中级'),
(2, '周泽勇', 'zzycami@qq.com', 'e10adc3949ba59abbe56e057f20f883e', '男', '计科男，喜欢变成', 0, '2013-05-27 07:46:42', 6, '1990-01-10', '本科大学', '330303031231230012', '汉', '15067145796', '好男人', 10, '0571-3131311', '程序员'),
(3, '楼小池', 'louxiaochi@qq.com', 'e10adc3949ba59abbe56e057f20f883e', '女', '高级职业技术人才', 0, '2013-05-27 07:56:54', 3, '1989-05-07', '本科大学', '303940589007260045', '白族', '15067145796', '教师', 9, '0571-64856113', '高级'),
(4, '卢光杰', 'luguangjie@qq.com', 'e10adc3949ba59abbe56e057f20f883e', '男', 'asdasdasdasd', 0, '2013-05-27 07:58:14', 6, '1089-01-01', '本科大学', '53292319900609007X', '汉', '15067145792', '学会说呢过代表', 2, '0891-3333333', '数学部'),
(5, '吕海涛', 'lvhaitao@qq.com', 'e10adc3949ba59abbe56e057f20f883e', '男', '喜欢打篮球', 0, '2013-05-27 08:19:33', 5, '1995-12-01', '本科大学', '330127030351140067', '汉', '13891191191', '教师', 5, '0571-64856911', '高级');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
