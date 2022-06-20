--
-- PostgreSQL database dump
--

-- Dumped from database version 13.4
-- Dumped by pg_dump version 13.4

-- Started on 2022-06-20 19:37:45

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

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 208 (class 1259 OID 16839)
-- Name: administrador; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.administrador (
    id integer NOT NULL,
    nome character(100) NOT NULL,
    email character(100) NOT NULL,
    senha character(50) NOT NULL
);


ALTER TABLE public.administrador OWNER TO postgres;

--
-- TOC entry 207 (class 1259 OID 16837)
-- Name: admin_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.admin_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.admin_id_seq OWNER TO postgres;

--
-- TOC entry 3038 (class 0 OID 0)
-- Dependencies: 207
-- Name: admin_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.admin_id_seq OWNED BY public.administrador.id;


--
-- TOC entry 204 (class 1259 OID 16793)
-- Name: genero; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.genero (
    id integer NOT NULL,
    genero character(30) NOT NULL
);


ALTER TABLE public.genero OWNER TO postgres;

--
-- TOC entry 203 (class 1259 OID 16791)
-- Name: genero_ID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."genero_ID_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."genero_ID_seq" OWNER TO postgres;

--
-- TOC entry 3039 (class 0 OID 0)
-- Dependencies: 203
-- Name: genero_ID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."genero_ID_seq" OWNED BY public.genero.id;


--
-- TOC entry 201 (class 1259 OID 16685)
-- Name: musicas; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.musicas (
    id integer NOT NULL,
    titulo character(100) NOT NULL,
    artistas character(200) NOT NULL,
    genero_id integer,
    id_tempo integer,
    audio character(50),
    imagem character(50)
);


ALTER TABLE public.musicas OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 16699)
-- Name: musicas_ID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."musicas_ID_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."musicas_ID_seq" OWNER TO postgres;

--
-- TOC entry 3040 (class 0 OID 0)
-- Dependencies: 202
-- Name: musicas_ID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."musicas_ID_seq" OWNED BY public.musicas.id;


--
-- TOC entry 200 (class 1259 OID 16682)
-- Name: questionario; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.questionario (
    id integer NOT NULL,
    pergunta character(300),
    opcaoa character(100),
    opcaob character(100),
    opcaoc character(100),
    resposta character(2),
    id_musica integer
);


ALTER TABLE public.questionario OWNER TO postgres;

--
-- TOC entry 209 (class 1259 OID 16847)
-- Name: questionarios_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.questionarios_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.questionarios_id_seq OWNER TO postgres;

--
-- TOC entry 3041 (class 0 OID 0)
-- Dependencies: 209
-- Name: questionarios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.questionarios_id_seq OWNED BY public.questionario.id;


--
-- TOC entry 206 (class 1259 OID 16801)
-- Name: tempos; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tempos (
    id integer NOT NULL,
    descricao character(50) NOT NULL
);


ALTER TABLE public.tempos OWNER TO postgres;

--
-- TOC entry 205 (class 1259 OID 16799)
-- Name: tempoverbal_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tempoverbal_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tempoverbal_id_seq OWNER TO postgres;

--
-- TOC entry 3042 (class 0 OID 0)
-- Dependencies: 205
-- Name: tempoverbal_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tempoverbal_id_seq OWNED BY public.tempos.id;


--
-- TOC entry 2880 (class 2604 OID 16842)
-- Name: administrador id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.administrador ALTER COLUMN id SET DEFAULT nextval('public.admin_id_seq'::regclass);


--
-- TOC entry 2878 (class 2604 OID 16796)
-- Name: genero id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.genero ALTER COLUMN id SET DEFAULT nextval('public."genero_ID_seq"'::regclass);


--
-- TOC entry 2877 (class 2604 OID 16701)
-- Name: musicas id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.musicas ALTER COLUMN id SET DEFAULT nextval('public."musicas_ID_seq"'::regclass);


--
-- TOC entry 2876 (class 2604 OID 16849)
-- Name: questionario id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.questionario ALTER COLUMN id SET DEFAULT nextval('public.questionarios_id_seq'::regclass);


--
-- TOC entry 2879 (class 2604 OID 16804)
-- Name: tempos id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tempos ALTER COLUMN id SET DEFAULT nextval('public.tempoverbal_id_seq'::regclass);


--
-- TOC entry 3031 (class 0 OID 16839)
-- Dependencies: 208
-- Data for Name: administrador; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.administrador (id, nome, email, senha) FROM stdin;
1	admin                                                                                               	admin@gmail.com                                                                                     	0192023a7bbd73250516f069df18b500                  
\.


--
-- TOC entry 3027 (class 0 OID 16793)
-- Dependencies: 204
-- Data for Name: genero; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.genero (id, genero) FROM stdin;
30	Rock                          
31	R&B                           
29	Pop                           
\.


--
-- TOC entry 3024 (class 0 OID 16685)
-- Dependencies: 201
-- Data for Name: musicas; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.musicas (id, titulo, artistas, genero_id, id_tempo, audio, imagem) FROM stdin;
92	Cry                                                                                                 	Mandy Moore                                                                                                                                                                                             	29	16	bfee777a0ae408fba190ebe1becc8ccff0702e48.mp3      	bfee777a0ae408fba190ebe1becc8ccff0702e48.jpg      
93	I Still Haven't Found What I'm Looking For                                                          	U2                                                                                                                                                                                                      	29	18	40e93b85aba6c421c0f77aac946949c0645f68c0.mp3      	40e93b85aba6c421c0f77aac946949c0645f68c0.jpg      
94	Do I Have To Say The Words?                                                                         	Bryan Adams                                                                                                                                                                                             	29	17	db9aaac11429dd337e4b8bd86dfe4407dd397832.mp3      	db9aaac11429dd337e4b8bd86dfe4407dd397832.jpg      
\.


--
-- TOC entry 3023 (class 0 OID 16682)
-- Dependencies: 200
-- Data for Name: questionario; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.questionario (id, pergunta, opcaoa, opcaob, opcaoc, resposta, id_musica) FROM stdin;
18	teste                                                                                                                                                                                                                                                                                                       	teste                                                                                               	teste                                                                                               	teste                                                                                               	b 	89
20	Tá todo mundo doido com o TCC?                                                                                                                                                                                                                                                                              	SIM                                                                                                 	CLARO                                                                                               	ÓBVIO                                                                                               	C 	90
21	Assinale a alternativa que utiliza Simple Past conforme o trecho disponibilizado : \r\n\r\nI'll always remember\r\n______ late afternoon\r\n______ forever\r\nAnd ended so soon, yeah\r\n______ all by yourself\r\nStaring up at a dark gray sky\r\n________ .                                                              	It was, It lasted, You were, I was changed                                                          	It are, last, was, live                                                                             	It was, It lasted, You were, I was loved                                                            	A 	92
22	Assinale a alternativa que utiliza Simple Past conforme o trecho disponibilizado :\r\n\r\nIn places no one will find\r\nAll your feelings so deep inside\r\n____________ that I _________\r\nThat forever _____ in your eyes\r\nThe moment _____ you cry                                                                	It was love, time, token, I saw                                                                     	It was last, realized, talk, I expect                                                               	It was now, realized, was, I saw                                                                    	C 	92
23	Assinale a alternativa que utiliza Simple Past conforme o trecho disponibilizado : \r\n\r\n_______ late in september\r\nAnd I've seen you before\r\n_______ always the cold one\r\nBut ______ never that sure\r\n________ all by yourself\r\nStaring up at a dark gray sky\r\n____________.                                 	It was, You were, I was, You were, I was changed                                                    	I wanted, You were, I was, You here, I'l was changed                                                	I wasn't, You are, I was,  You were, I was changed                                                  	A 	92
24	Assinale a alternativa que utiliza Simple Past conforme o trecho disponibilizado :\r\n\r\n_________ to hold you\r\n_________  to make it go away\r\n_________  to know you\r\n_________  to make your everything, all right....\r\n\r\n                                                                                   	I liked, I loved, I lived, I was                                                                    	I wanted, I wanted, I wanted, I wanted                                                              	I wanted, I wanted, I wanted, I loved                                                               	B 	92
25	I _____________ the highest mountains\r\nI _________ through the fields\r\nOnly to be with you\r\nOnly to be with you                                                                                                                                                                                             	have climbed, have clean                                                                            	Has clean, have gones                                                                               	have climbed, have run                                                                              	C 	93
26	I _________, I have crawled\r\nI ___________ these city walls\r\nThese city walls\r\nOnly to be with you                                                                                                                                                                                                          	have run, have scaled                                                                               	have lived, have run                                                                                	have run, have loved                                                                                	A 	93
27	But I still _______________ what I'm looking for\r\nBut I still _______________ what I'm looking for\r\n\r\nI _______________ honey lips\r\nFelt the healing fingertips\r\nIt burned like fire\r\nThis burning desire                                                                                                   	haven't found, have kissed, haven't found                                                           	haven't found, haven't loved, has kiss                                                              	haven't found,  haven't found, have kissed                                                          	C 	93
28	I ___________ with the tongue of angels\r\nI ___________ the hand of the devil\r\nIt was warm in the night\r\nI was cold as a stone\r\n\r\nBut I still ___________ what I'm looking for\r\nBut I still ___________ what I'm looking for                                                                                 	have spoken, have held, haven't found, haven't love                                                 	have spoken, have held, haven't found, haven't found                                                	have lived, have love, haven't found, haven't found                                                 	B 	93
29	But I still _______________ what I'm looking for\r\nBut I still _______________ what I'm looking for\r\nBut I still _______________ what I'm looking for\r\nBut I still _______________ what I'm looking for                                                                                                      	haven't found, haven't found, haven't found, haven't found                                          	loved, loved, loved, loved                                                                          	has found, has found, haven't found,  haven't found                                                 	A 	93
30	____________ from the mire.\r\n__________ words of desire. \r\n____________, darling, rescue me. \r\nWith your arms open wide. \r\nWant you here by my side. \r\n____________ me, darling, rescue me.\r\nWhen this world's closing in.\r\nThere's no need to pretend.\r\n____________, darling, rescue me.                  	Whisper, Rescue me, Coming, Set me free                                                             	Rescue me, Whisper, Rescue me, Come to, Set me free                                                 	Rescue me, Whisper, Rescue me, Come to, Set me living                                               	B 	94
31	___________ to say the words? [Eu tenho que dizer as palavras?]\r\n___________ to tell the truth? [Eu tenho que contar a verdade?]\r\n___________ to shout it out? [Eu tenho que dizer gritando?]\r\n___________ to say a prayer? [Eu tenho que fazer uma oração?]\r\nMust I prove to you how good we are together? 	Do I have, Do I have, Do I have, Do I have                                                          	Do I have, Do I was, Do I have, Do I have                                                           	Do I lived, Do I have, Do I have, Do I has                                                          	A 	94
32	__________ to say the words?\r\n__________ from despair. \r\n__________ you will be there. \r\n__________, please darling, rescue me. \r\nEvery dream that __________. \r\nEvery cross that __________.                                                                                                               	Do I have, Rescue me, Tell me, he lie, we run                                                       	Do I have, Rescue me, Tell me, we lives, we run                                                     	Do I have, Rescue me, Tell me, Help me, we share, we bear                                           	C 	94
33	Can't you see? Darling, rescue me. \r\n__________ wanna let you go\r\nSo I'm standing in your way\r\nI never needed anyone\r\nLike I'm needing you today\r\n\r\n                                                                                                                                                        	I don't                                                                                             	I have                                                                                              	I liked                                                                                             	A 	94
\.


--
-- TOC entry 3029 (class 0 OID 16801)
-- Dependencies: 206
-- Data for Name: tempos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tempos (id, descricao) FROM stdin;
16	Simple Past                                       
17	Simple Present                                    
18	Present Perfect                                   
\.


--
-- TOC entry 3043 (class 0 OID 0)
-- Dependencies: 207
-- Name: admin_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.admin_id_seq', 2, true);


--
-- TOC entry 3044 (class 0 OID 0)
-- Dependencies: 203
-- Name: genero_ID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."genero_ID_seq"', 31, true);


--
-- TOC entry 3045 (class 0 OID 0)
-- Dependencies: 202
-- Name: musicas_ID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."musicas_ID_seq"', 95, true);


--
-- TOC entry 3046 (class 0 OID 0)
-- Dependencies: 209
-- Name: questionarios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.questionarios_id_seq', 33, true);


--
-- TOC entry 3047 (class 0 OID 0)
-- Dependencies: 205
-- Name: tempoverbal_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tempoverbal_id_seq', 18, true);


--
-- TOC entry 2884 (class 2606 OID 16706)
-- Name: musicas ID; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.musicas
    ADD CONSTRAINT "ID" PRIMARY KEY (id) INCLUDE (id);


--
-- TOC entry 2890 (class 2606 OID 16844)
-- Name: administrador admin_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.administrador
    ADD CONSTRAINT admin_pkey PRIMARY KEY (id);


--
-- TOC entry 2892 (class 2606 OID 16846)
-- Name: administrador email; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.administrador
    ADD CONSTRAINT email UNIQUE (email) INCLUDE (email);


--
-- TOC entry 2886 (class 2606 OID 16798)
-- Name: genero genero_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.genero
    ADD CONSTRAINT genero_pkey PRIMARY KEY (id);


--
-- TOC entry 2882 (class 2606 OID 16857)
-- Name: questionario id; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.questionario
    ADD CONSTRAINT id PRIMARY KEY (id) INCLUDE (id);


--
-- TOC entry 2888 (class 2606 OID 16806)
-- Name: tempos tempoverbal_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tempos
    ADD CONSTRAINT tempoverbal_pkey PRIMARY KEY (id);


-- Completed on 2022-06-20 19:37:46

--
-- PostgreSQL database dump complete
--

