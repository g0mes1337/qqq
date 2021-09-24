--
-- PostgreSQL database dump
--

-- Dumped from database version 10.12
-- Dumped by pg_dump version 10.12

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: books; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA books;


ALTER SCHEMA books OWNER TO postgres;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: books; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.books (
    name text,
    article text,
    date date,
    author text,
    status integer DEFAULT 0,
    id integer NOT NULL,
    checkbook text DEFAULT true
);


ALTER TABLE public.books OWNER TO postgres;

--
-- Name: books_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.books_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.books_id_seq OWNER TO postgres;

--
-- Name: books_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.books_id_seq OWNED BY public.books.id;


--
-- Name: clients; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.clients (
    name text,
    surname text,
    patronymic text,
    id integer NOT NULL,
    pasport integer
);


ALTER TABLE public.clients OWNER TO postgres;

--
-- Name: clients_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.clients_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.clients_id_seq OWNER TO postgres;

--
-- Name: clients_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.clients_id_seq OWNED BY public.clients.id;


--
-- Name: order; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."order" (
    id_worker integer,
    id_book integer,
    datestump date,
    issue integer,
    id_client integer,
    id integer NOT NULL
);


ALTER TABLE public."order" OWNER TO postgres;

--
-- Name: order_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.order_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.order_id_seq OWNER TO postgres;

--
-- Name: order_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.order_id_seq OWNED BY public."order".id;


--
-- Name: returnb; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.returnb (
    id_worker integer,
    id_book integer,
    datereturn date,
    condition text,
    id integer NOT NULL
);


ALTER TABLE public.returnb OWNER TO postgres;

--
-- Name: returnb_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.returnb_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.returnb_id_seq OWNER TO postgres;

--
-- Name: returnb_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.returnb_id_seq OWNED BY public.returnb.id;


--
-- Name: worker; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.worker (
    name text,
    surname text,
    patronymic text,
    "position" text,
    email text,
    password text,
    id integer NOT NULL
);


ALTER TABLE public.worker OWNER TO postgres;

--
-- Name: worker_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.worker_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.worker_id_seq OWNER TO postgres;

--
-- Name: worker_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.worker_id_seq OWNED BY public.worker.id;


--
-- Name: books id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.books ALTER COLUMN id SET DEFAULT nextval('public.books_id_seq'::regclass);


--
-- Name: clients id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.clients ALTER COLUMN id SET DEFAULT nextval('public.clients_id_seq'::regclass);


--
-- Name: order id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."order" ALTER COLUMN id SET DEFAULT nextval('public.order_id_seq'::regclass);


--
-- Name: returnb id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.returnb ALTER COLUMN id SET DEFAULT nextval('public.returnb_id_seq'::regclass);


--
-- Name: worker id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.worker ALTER COLUMN id SET DEFAULT nextval('public.worker_id_seq'::regclass);


--
-- Data for Name: books; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.books (name, article, date, author, status, id, checkbook) FROM stdin;
qweqwe	qweqweqeqwe	2021-09-24	qweqweqweqweqe	\N	3	false
фывваааа	фывфывфыв	2021-09-24	фывфывфывфы	\N	4	true
qwe	weqewq	2021-09-24	weqqweqwe	0	2	true
\.


--
-- Data for Name: clients; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.clients (name, surname, patronymic, id, pasport) FROM stdin;
qweq	qweqwe	qweqweqwe	5	123123
\.


--
-- Data for Name: order; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."order" (id_worker, id_book, datestump, issue, id_client, id) FROM stdin;
5	2	2021-09-24	1231	5	1
5	3	2021-09-24	123123	5	2
5	2	2021-09-24	213123	5	3
5	2	2021-09-24	213123	5	4
5	2	2021-09-24	213123	5	5
\.


--
-- Data for Name: returnb; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.returnb (id_worker, id_book, datereturn, condition, id) FROM stdin;
5	2	2021-09-24	0	1
5	2	2021-09-24	1	2
5	2	2021-09-24	1	3
\.


--
-- Data for Name: worker; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.worker (name, surname, patronymic, "position", email, password, id) FROM stdin;
ewqe	qweqw	qweqwe	qweqwe	qweqw	qweqwe	1
qweqwe	qweqwe	qweqwe	\N	qweqweqwe@qweqwe.eqwe	$2y$13$JXGUDBHmgCPKAdTxdR18nefJiwo0hDuOJEKGtRMNFBM6rJg4a1gUW	4
qweqweqwe	wqeqwe	qweqwe	\N	qwerty@qwe.weq	$2y$13$ZBWXOmHZoqZgfAU/jyi9POYpm1yB.XfOY3P77Kh5Nr2I97peBObxC	5
\.


--
-- Name: books_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.books_id_seq', 4, true);


--
-- Name: clients_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.clients_id_seq', 5, true);


--
-- Name: order_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.order_id_seq', 5, true);


--
-- Name: returnb_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.returnb_id_seq', 3, true);


--
-- Name: worker_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.worker_id_seq', 5, true);


--
-- Name: books books_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.books
    ADD CONSTRAINT books_pkey PRIMARY KEY (id);


--
-- Name: clients clients_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.clients
    ADD CONSTRAINT clients_pkey PRIMARY KEY (id);


--
-- Name: order order_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."order"
    ADD CONSTRAINT order_pkey PRIMARY KEY (id);


--
-- Name: returnb returnb_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.returnb
    ADD CONSTRAINT returnb_pkey PRIMARY KEY (id);


--
-- Name: worker worker_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.worker
    ADD CONSTRAINT worker_pkey PRIMARY KEY (id);


--
-- Name: order order_id_book_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."order"
    ADD CONSTRAINT order_id_book_fkey FOREIGN KEY (id_book) REFERENCES public.books(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: order order_id_client_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."order"
    ADD CONSTRAINT order_id_client_fkey FOREIGN KEY (id_client) REFERENCES public.clients(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: order order_id_worker_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."order"
    ADD CONSTRAINT order_id_worker_fkey FOREIGN KEY (id_worker) REFERENCES public.worker(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: returnb returnb_id_book_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.returnb
    ADD CONSTRAINT returnb_id_book_fkey FOREIGN KEY (id_book) REFERENCES public.books(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: returnb returnb_id_worker_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.returnb
    ADD CONSTRAINT returnb_id_worker_fkey FOREIGN KEY (id_worker) REFERENCES public.worker(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- PostgreSQL database dump complete
--

