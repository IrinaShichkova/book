CREATE TABLE fam (
  f_id SERIAL PRIMARY KEY NOT NULL,
  f_val VARCHAR (30) NOT NULL
);

CREATE TABLE name (
  n_id SERIAL PRIMARY KEY NOT NULL,
  n_val VARCHAR (30) NOT NULL
);

CREATE TABLE otc (
  o_id SERIAL PRIMARY KEY NOT NULL,
  o_val VARCHAR (30) NOT NULL
);

CREATE TABLE street (
  s_id SERIAL PRIMARY KEY NOT NULL,
  s_val VARCHAR (50) NOT NULL
);

CREATE TABLE book (
  b_id SERIAL PRIMARY KEY NOT NULL,
  fam_id INTEGER REFERENCES fam (f_id),
  nam_id INTEGER REFERENCES name (n_id),
  otc_id INTEGER REFERENCES otc (o_id),
  str_id INTEGER REFERENCES street (s_id),
  n_home INTEGER NOT NULL,
  corp VARCHAR,
  tel VARCHAR NOT NULL
)

