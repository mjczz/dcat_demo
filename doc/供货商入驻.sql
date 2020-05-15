ALTER TABLE `t_supplier` ADD COLUMN taxpayer TINYINT(1) NOT NULL DEFAULT 0 COMMENT '纳税人资格：1一般纳税人 2小规模纳税人';
ALTER TABLE `t_supplier` ADD COLUMN enterprise_type TINYINT(1) NOT NULL DEFAULT 0 COMMENT '企业性质：1授权经销商 2生产厂家 3贴牌经销商';
ALTER TABLE `t_supplier` ADD COLUMN supplier_shenhe_status TINYINT(1) NOT NULL DEFAULT 0 COMMENT '审核状态：1未提交审核 2已提交审核（审核中） 3审核通过 4审核拒绝';







