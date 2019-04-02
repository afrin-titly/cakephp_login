CREATE DATABASE k_orquesta;

-- 棚卸表表示条件
CREATE TABLE stockReportCondition (
  bu_no smallint,
  coefficient double,
  refrigerator boolean,
  freezer boolean,
  counter boolean,
  primary key(bu_no)
);


-- 週間棚卸報告
CREATE TABLE stockReport (
  yearweek integer,
  tn_no smallint,
  bu_no smallint,
  counter bigint,
  refrigerator bigint,
  freezer bigint,
  summary bigint,
  primary key(yearweek,tn_no,bu_no)
);
