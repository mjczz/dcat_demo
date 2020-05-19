ALTER TABLE `t_supplier` ADD COLUMN supplier_shenhe_status TINYINT(1) NOT NULL DEFAULT 0 COMMENT '供货商入驻审核状态：1未提交审核 2已提交审核（审核中） 3审核通过 4审核拒绝';
ALTER TABLE `t_supplier` ADD COLUMN submit_shenhe_time INTEGER(11) NOT NULL DEFAULT 0 COMMENT '供货商入驻，提交审核时间';
ALTER TABLE `t_supplier` ADD COLUMN success_shenhe_time INTEGER(11) NOT NULL DEFAULT 0 COMMENT '供货商入驻，审核通过时间';







