PGDMP     3    +                |            portfolio-pdeloor-database    15.4    15.4 �    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    42916    portfolio-pdeloor-database    DATABASE     �   CREATE DATABASE "portfolio-pdeloor-database" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Spanish_Spain.1252';
 ,   DROP DATABASE "portfolio-pdeloor-database";
             
   aerducfulj    false            �            1259    43259    abouts    TABLE     -  CREATE TABLE public.abouts (
    id bigint NOT NULL,
    about character varying(1000),
    who_are_you character varying(191),
    short_description text,
    date_of_birth date,
    website character varying(191),
    phone character varying(191),
    city character varying(191),
    degree character varying(191),
    status character varying(191),
    description text,
    facts_description text,
    skills_description text,
    user_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.abouts;
       public         heap 
   aerducfulj    false            �            1259    43258    abouts_id_seq    SEQUENCE     v   CREATE SEQUENCE public.abouts_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.abouts_id_seq;
       public       
   aerducfulj    false    226            �           0    0    abouts_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.abouts_id_seq OWNED BY public.abouts.id;
          public       
   aerducfulj    false    225            �            1259    43451    contacts    TABLE     �   CREATE TABLE public.contacts (
    id bigint NOT NULL,
    description text,
    url_google_maps text NOT NULL,
    user_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.contacts;
       public         heap 
   aerducfulj    false            �            1259    43450    contacts_id_seq    SEQUENCE     x   CREATE SEQUENCE public.contacts_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.contacts_id_seq;
       public       
   aerducfulj    false    254            �           0    0    contacts_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.contacts_id_seq OWNED BY public.contacts.id;
          public       
   aerducfulj    false    253            �            1259    43311 	   education    TABLE     �  CREATE TABLE public.education (
    id bigint NOT NULL,
    title character varying(191) NOT NULL,
    date_start date NOT NULL,
    date_end date NOT NULL,
    status character varying(255) DEFAULT 'finalizado'::character varying NOT NULL,
    educational_institution character varying(191) NOT NULL,
    city character varying(191) NOT NULL,
    description text NOT NULL,
    user_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    CONSTRAINT education_status_check CHECK (((status)::text = ANY ((ARRAY['en_curso'::character varying, 'finalizado'::character varying])::text[])))
);
    DROP TABLE public.education;
       public         heap 
   aerducfulj    false            �            1259    43310    education_id_seq    SEQUENCE     y   CREATE SEQUENCE public.education_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.education_id_seq;
       public       
   aerducfulj    false    234            �           0    0    education_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.education_id_seq OWNED BY public.education.id;
          public       
   aerducfulj    false    233                        1259    43465    emails    TABLE     2  CREATE TABLE public.emails (
    id bigint NOT NULL,
    name character varying(191) NOT NULL,
    email character varying(191) NOT NULL,
    subject character varying(191) NOT NULL,
    message text NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.emails;
       public         heap 
   aerducfulj    false            �            1259    43464    emails_id_seq    SEQUENCE     v   CREATE SEQUENCE public.emails_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.emails_id_seq;
       public       
   aerducfulj    false    256            �           0    0    emails_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.emails_id_seq OWNED BY public.emails.id;
          public       
   aerducfulj    false    255            �            1259    43273    facts    TABLE     V  CREATE TABLE public.facts (
    id bigint NOT NULL,
    icon character varying(50) NOT NULL,
    many integer NOT NULL,
    fact character varying(191) NOT NULL,
    short_description character varying(191) NOT NULL,
    user_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.facts;
       public         heap 
   aerducfulj    false            �            1259    43272    facts_id_seq    SEQUENCE     u   CREATE SEQUENCE public.facts_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.facts_id_seq;
       public       
   aerducfulj    false    228            �           0    0    facts_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.facts_id_seq OWNED BY public.facts.id;
          public       
   aerducfulj    false    227            �            1259    43221    failed_jobs    TABLE     &  CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(191) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap 
   aerducfulj    false            �            1259    43220    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public       
   aerducfulj    false    220            �           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public       
   aerducfulj    false    219            �            1259    43381    images    TABLE     �  CREATE TABLE public.images (
    id bigint NOT NULL,
    title character varying(191) NOT NULL,
    description text NOT NULL,
    url_image character varying(255) NOT NULL,
    imageable_id bigint NOT NULL,
    imageable_type character varying(191) NOT NULL,
    user_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.images;
       public         heap 
   aerducfulj    false            �            1259    43380    images_id_seq    SEQUENCE     v   CREATE SEQUENCE public.images_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.images_id_seq;
       public       
   aerducfulj    false    244            �           0    0    images_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.images_id_seq OWNED BY public.images.id;
          public       
   aerducfulj    false    243            �            1259    42918 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(191) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap 
   aerducfulj    false            �            1259    42917    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public       
   aerducfulj    false    215            �           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public       
   aerducfulj    false    214            �            1259    43216    password_resets    TABLE     �   CREATE TABLE public.password_resets (
    email character varying(191) NOT NULL,
    token character varying(191) NOT NULL,
    created_at timestamp(0) without time zone
);
 #   DROP TABLE public.password_resets;
       public         heap 
   aerducfulj    false            �            1259    43233    personal_access_tokens    TABLE     �  CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(191) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(191) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    expires_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 *   DROP TABLE public.personal_access_tokens;
       public         heap 
   aerducfulj    false            �            1259    43232    personal_access_tokens_id_seq    SEQUENCE     �   CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.personal_access_tokens_id_seq;
       public       
   aerducfulj    false    222            �           0    0    personal_access_tokens_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;
          public       
   aerducfulj    false    221            �            1259    43437    personal_references    TABLE     �  CREATE TABLE public.personal_references (
    id bigint NOT NULL,
    name character varying(191) NOT NULL,
    "position" character varying(191) NOT NULL,
    company character varying(191) NOT NULL,
    email character varying(191) NOT NULL,
    cel character varying(191) NOT NULL,
    testimonial text NOT NULL,
    testimonial_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 '   DROP TABLE public.personal_references;
       public         heap 
   aerducfulj    false            �            1259    43436    personal_references_id_seq    SEQUENCE     �   CREATE SEQUENCE public.personal_references_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.personal_references_id_seq;
       public       
   aerducfulj    false    252            �           0    0    personal_references_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.personal_references_id_seq OWNED BY public.personal_references.id;
          public       
   aerducfulj    false    251            �            1259    43341 
   portfolios    TABLE     �   CREATE TABLE public.portfolios (
    id bigint NOT NULL,
    description text,
    user_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.portfolios;
       public         heap 
   aerducfulj    false            �            1259    43340    portfolios_id_seq    SEQUENCE     z   CREATE SEQUENCE public.portfolios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.portfolios_id_seq;
       public       
   aerducfulj    false    238            �           0    0    portfolios_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.portfolios_id_seq OWNED BY public.portfolios.id;
          public       
   aerducfulj    false    237            �            1259    43327    professional_experiences    TABLE     n  CREATE TABLE public.professional_experiences (
    id bigint NOT NULL,
    "position" character varying(191) NOT NULL,
    date_start date NOT NULL,
    date_end date,
    city character varying(191) NOT NULL,
    description text NOT NULL,
    user_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 ,   DROP TABLE public.professional_experiences;
       public         heap 
   aerducfulj    false            �            1259    43326    professional_experiences_id_seq    SEQUENCE     �   CREATE SEQUENCE public.professional_experiences_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 6   DROP SEQUENCE public.professional_experiences_id_seq;
       public       
   aerducfulj    false    236            �           0    0    professional_experiences_id_seq    SEQUENCE OWNED BY     c   ALTER SEQUENCE public.professional_experiences_id_seq OWNED BY public.professional_experiences.id;
          public       
   aerducfulj    false    235            �            1259    43245    profiles    TABLE     �  CREATE TABLE public.profiles (
    id bigint NOT NULL,
    url_photo character varying(191),
    url_photo_background character varying(191),
    url_linkedin character varying(191),
    url_github character varying(191),
    url_twitter character varying(191),
    slogan character varying(191),
    slogan_dynamic character varying(191),
    message character varying(191),
    user_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.profiles;
       public         heap 
   aerducfulj    false            �            1259    43244    profiles_id_seq    SEQUENCE     x   CREATE SEQUENCE public.profiles_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.profiles_id_seq;
       public       
   aerducfulj    false    224            �           0    0    profiles_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.profiles_id_seq OWNED BY public.profiles.id;
          public       
   aerducfulj    false    223            �            1259    43355    project_categories    TABLE     �   CREATE TABLE public.project_categories (
    id bigint NOT NULL,
    project_category character varying(191) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 &   DROP TABLE public.project_categories;
       public         heap 
   aerducfulj    false            �            1259    43354    project_categories_id_seq    SEQUENCE     �   CREATE SEQUENCE public.project_categories_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.project_categories_id_seq;
       public       
   aerducfulj    false    240            �           0    0    project_categories_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.project_categories_id_seq OWNED BY public.project_categories.id;
          public       
   aerducfulj    false    239            �            1259    43362    projects    TABLE     �  CREATE TABLE public.projects (
    id bigint NOT NULL,
    project character varying(191) NOT NULL,
    description text NOT NULL,
    client character varying(191) NOT NULL,
    date date NOT NULL,
    url character varying(191) NOT NULL,
    portfolio_id bigint NOT NULL,
    category_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.projects;
       public         heap 
   aerducfulj    false            �            1259    43361    projects_id_seq    SEQUENCE     x   CREATE SEQUENCE public.projects_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.projects_id_seq;
       public       
   aerducfulj    false    242            �           0    0    projects_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.projects_id_seq OWNED BY public.projects.id;
          public       
   aerducfulj    false    241            �            1259    43297    resumes    TABLE     �   CREATE TABLE public.resumes (
    id bigint NOT NULL,
    resume text,
    sumary text,
    address character varying(191),
    user_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.resumes;
       public         heap 
   aerducfulj    false            �            1259    43296    resumes_id_seq    SEQUENCE     w   CREATE SEQUENCE public.resumes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.resumes_id_seq;
       public       
   aerducfulj    false    232            �           0    0    resumes_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.resumes_id_seq OWNED BY public.resumes.id;
          public       
   aerducfulj    false    231            �            1259    43395    services    TABLE     �   CREATE TABLE public.services (
    id bigint NOT NULL,
    description text,
    user_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.services;
       public         heap 
   aerducfulj    false            �            1259    43394    services_id_seq    SEQUENCE     x   CREATE SEQUENCE public.services_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.services_id_seq;
       public       
   aerducfulj    false    246            �           0    0    services_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.services_id_seq OWNED BY public.services.id;
          public       
   aerducfulj    false    245            �            1259    43285    skills    TABLE     �   CREATE TABLE public.skills (
    id bigint NOT NULL,
    skill character varying(191) NOT NULL,
    percent integer NOT NULL,
    user_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.skills;
       public         heap 
   aerducfulj    false            �            1259    43284    skills_id_seq    SEQUENCE     v   CREATE SEQUENCE public.skills_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.skills_id_seq;
       public       
   aerducfulj    false    230            �           0    0    skills_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.skills_id_seq OWNED BY public.skills.id;
          public       
   aerducfulj    false    229            �            1259    43423    testimonials    TABLE     �   CREATE TABLE public.testimonials (
    id bigint NOT NULL,
    description text,
    user_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
     DROP TABLE public.testimonials;
       public         heap 
   aerducfulj    false            �            1259    43422    testimonials_id_seq    SEQUENCE     |   CREATE SEQUENCE public.testimonials_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.testimonials_id_seq;
       public       
   aerducfulj    false    250            �           0    0    testimonials_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.testimonials_id_seq OWNED BY public.testimonials.id;
          public       
   aerducfulj    false    249            �            1259    43409    type_services    TABLE     H  CREATE TABLE public.type_services (
    id bigint NOT NULL,
    icon character varying(191) NOT NULL,
    title character varying(191) NOT NULL,
    short_description character varying(191) NOT NULL,
    service_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 !   DROP TABLE public.type_services;
       public         heap 
   aerducfulj    false            �            1259    43408    type_services_id_seq    SEQUENCE     }   CREATE SEQUENCE public.type_services_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.type_services_id_seq;
       public       
   aerducfulj    false    248            �           0    0    type_services_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.type_services_id_seq OWNED BY public.type_services.id;
          public       
   aerducfulj    false    247            �            1259    43206    users    TABLE     �  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(191) NOT NULL,
    email character varying(191) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(191) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    facebook_id character varying(191),
    google_id character varying(191),
    github_id character varying(191)
);
    DROP TABLE public.users;
       public         heap 
   aerducfulj    false            �            1259    43205    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public       
   aerducfulj    false    217            �           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public       
   aerducfulj    false    216            �           2604    43262 	   abouts id    DEFAULT     f   ALTER TABLE ONLY public.abouts ALTER COLUMN id SET DEFAULT nextval('public.abouts_id_seq'::regclass);
 8   ALTER TABLE public.abouts ALTER COLUMN id DROP DEFAULT;
       public       
   aerducfulj    false    225    226    226            �           2604    43454    contacts id    DEFAULT     j   ALTER TABLE ONLY public.contacts ALTER COLUMN id SET DEFAULT nextval('public.contacts_id_seq'::regclass);
 :   ALTER TABLE public.contacts ALTER COLUMN id DROP DEFAULT;
       public       
   aerducfulj    false    253    254    254            �           2604    43314    education id    DEFAULT     l   ALTER TABLE ONLY public.education ALTER COLUMN id SET DEFAULT nextval('public.education_id_seq'::regclass);
 ;   ALTER TABLE public.education ALTER COLUMN id DROP DEFAULT;
       public       
   aerducfulj    false    234    233    234            �           2604    43468 	   emails id    DEFAULT     f   ALTER TABLE ONLY public.emails ALTER COLUMN id SET DEFAULT nextval('public.emails_id_seq'::regclass);
 8   ALTER TABLE public.emails ALTER COLUMN id DROP DEFAULT;
       public       
   aerducfulj    false    256    255    256            �           2604    43276    facts id    DEFAULT     d   ALTER TABLE ONLY public.facts ALTER COLUMN id SET DEFAULT nextval('public.facts_id_seq'::regclass);
 7   ALTER TABLE public.facts ALTER COLUMN id DROP DEFAULT;
       public       
   aerducfulj    false    228    227    228            �           2604    43224    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public       
   aerducfulj    false    220    219    220            �           2604    43384 	   images id    DEFAULT     f   ALTER TABLE ONLY public.images ALTER COLUMN id SET DEFAULT nextval('public.images_id_seq'::regclass);
 8   ALTER TABLE public.images ALTER COLUMN id DROP DEFAULT;
       public       
   aerducfulj    false    244    243    244            �           2604    42921    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public       
   aerducfulj    false    214    215    215            �           2604    43236    personal_access_tokens id    DEFAULT     �   ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);
 H   ALTER TABLE public.personal_access_tokens ALTER COLUMN id DROP DEFAULT;
       public       
   aerducfulj    false    221    222    222            �           2604    43440    personal_references id    DEFAULT     �   ALTER TABLE ONLY public.personal_references ALTER COLUMN id SET DEFAULT nextval('public.personal_references_id_seq'::regclass);
 E   ALTER TABLE public.personal_references ALTER COLUMN id DROP DEFAULT;
       public       
   aerducfulj    false    251    252    252            �           2604    43344    portfolios id    DEFAULT     n   ALTER TABLE ONLY public.portfolios ALTER COLUMN id SET DEFAULT nextval('public.portfolios_id_seq'::regclass);
 <   ALTER TABLE public.portfolios ALTER COLUMN id DROP DEFAULT;
       public       
   aerducfulj    false    238    237    238            �           2604    43330    professional_experiences id    DEFAULT     �   ALTER TABLE ONLY public.professional_experiences ALTER COLUMN id SET DEFAULT nextval('public.professional_experiences_id_seq'::regclass);
 J   ALTER TABLE public.professional_experiences ALTER COLUMN id DROP DEFAULT;
       public       
   aerducfulj    false    235    236    236            �           2604    43248    profiles id    DEFAULT     j   ALTER TABLE ONLY public.profiles ALTER COLUMN id SET DEFAULT nextval('public.profiles_id_seq'::regclass);
 :   ALTER TABLE public.profiles ALTER COLUMN id DROP DEFAULT;
       public       
   aerducfulj    false    223    224    224            �           2604    43358    project_categories id    DEFAULT     ~   ALTER TABLE ONLY public.project_categories ALTER COLUMN id SET DEFAULT nextval('public.project_categories_id_seq'::regclass);
 D   ALTER TABLE public.project_categories ALTER COLUMN id DROP DEFAULT;
       public       
   aerducfulj    false    239    240    240            �           2604    43365    projects id    DEFAULT     j   ALTER TABLE ONLY public.projects ALTER COLUMN id SET DEFAULT nextval('public.projects_id_seq'::regclass);
 :   ALTER TABLE public.projects ALTER COLUMN id DROP DEFAULT;
       public       
   aerducfulj    false    241    242    242            �           2604    43300 
   resumes id    DEFAULT     h   ALTER TABLE ONLY public.resumes ALTER COLUMN id SET DEFAULT nextval('public.resumes_id_seq'::regclass);
 9   ALTER TABLE public.resumes ALTER COLUMN id DROP DEFAULT;
       public       
   aerducfulj    false    231    232    232            �           2604    43398    services id    DEFAULT     j   ALTER TABLE ONLY public.services ALTER COLUMN id SET DEFAULT nextval('public.services_id_seq'::regclass);
 :   ALTER TABLE public.services ALTER COLUMN id DROP DEFAULT;
       public       
   aerducfulj    false    245    246    246            �           2604    43288 	   skills id    DEFAULT     f   ALTER TABLE ONLY public.skills ALTER COLUMN id SET DEFAULT nextval('public.skills_id_seq'::regclass);
 8   ALTER TABLE public.skills ALTER COLUMN id DROP DEFAULT;
       public       
   aerducfulj    false    229    230    230            �           2604    43426    testimonials id    DEFAULT     r   ALTER TABLE ONLY public.testimonials ALTER COLUMN id SET DEFAULT nextval('public.testimonials_id_seq'::regclass);
 >   ALTER TABLE public.testimonials ALTER COLUMN id DROP DEFAULT;
       public       
   aerducfulj    false    250    249    250            �           2604    43412    type_services id    DEFAULT     t   ALTER TABLE ONLY public.type_services ALTER COLUMN id SET DEFAULT nextval('public.type_services_id_seq'::regclass);
 ?   ALTER TABLE public.type_services ALTER COLUMN id DROP DEFAULT;
       public       
   aerducfulj    false    248    247    248            �           2604    43209    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public       
   aerducfulj    false    217    216    217            �          0    43259    abouts 
   TABLE DATA           �   COPY public.abouts (id, about, who_are_you, short_description, date_of_birth, website, phone, city, degree, status, description, facts_description, skills_description, user_id, created_at, updated_at) FROM stdin;
    public       
   aerducfulj    false    226   5�       �          0    43451    contacts 
   TABLE DATA           e   COPY public.contacts (id, description, url_google_maps, user_id, created_at, updated_at) FROM stdin;
    public       
   aerducfulj    false    254   �       �          0    43311 	   education 
   TABLE DATA           �   COPY public.education (id, title, date_start, date_end, status, educational_institution, city, description, user_id, created_at, updated_at) FROM stdin;
    public       
   aerducfulj    false    234   �       �          0    43465    emails 
   TABLE DATA           [   COPY public.emails (id, name, email, subject, message, created_at, updated_at) FROM stdin;
    public       
   aerducfulj    false    256   ��       �          0    43273    facts 
   TABLE DATA           i   COPY public.facts (id, icon, many, fact, short_description, user_id, created_at, updated_at) FROM stdin;
    public       
   aerducfulj    false    228   ��       �          0    43221    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public       
   aerducfulj    false    220   ��       �          0    43381    images 
   TABLE DATA           �   COPY public.images (id, title, description, url_image, imageable_id, imageable_type, user_id, created_at, updated_at) FROM stdin;
    public       
   aerducfulj    false    244   ��       �          0    42918 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public       
   aerducfulj    false    215   ��       �          0    43216    password_resets 
   TABLE DATA           C   COPY public.password_resets (email, token, created_at) FROM stdin;
    public       
   aerducfulj    false    218    �       �          0    43233    personal_access_tokens 
   TABLE DATA           �   COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, expires_at, created_at, updated_at) FROM stdin;
    public       
   aerducfulj    false    222   �       �          0    43437    personal_references 
   TABLE DATA           �   COPY public.personal_references (id, name, "position", company, email, cel, testimonial, testimonial_id, created_at, updated_at) FROM stdin;
    public       
   aerducfulj    false    252   :�       �          0    43341 
   portfolios 
   TABLE DATA           V   COPY public.portfolios (id, description, user_id, created_at, updated_at) FROM stdin;
    public       
   aerducfulj    false    238   W�       �          0    43327    professional_experiences 
   TABLE DATA           �   COPY public.professional_experiences (id, "position", date_start, date_end, city, description, user_id, created_at, updated_at) FROM stdin;
    public       
   aerducfulj    false    236   ~�       �          0    43245    profiles 
   TABLE DATA           �   COPY public.profiles (id, url_photo, url_photo_background, url_linkedin, url_github, url_twitter, slogan, slogan_dynamic, message, user_id, created_at, updated_at) FROM stdin;
    public       
   aerducfulj    false    224   ��       �          0    43355    project_categories 
   TABLE DATA           Z   COPY public.project_categories (id, project_category, created_at, updated_at) FROM stdin;
    public       
   aerducfulj    false    240   ��       �          0    43362    projects 
   TABLE DATA           �   COPY public.projects (id, project, description, client, date, url, portfolio_id, category_id, created_at, updated_at) FROM stdin;
    public       
   aerducfulj    false    242   ��       �          0    43297    resumes 
   TABLE DATA           _   COPY public.resumes (id, resume, sumary, address, user_id, created_at, updated_at) FROM stdin;
    public       
   aerducfulj    false    232   ^�       �          0    43395    services 
   TABLE DATA           T   COPY public.services (id, description, user_id, created_at, updated_at) FROM stdin;
    public       
   aerducfulj    false    246   ��       �          0    43285    skills 
   TABLE DATA           U   COPY public.skills (id, skill, percent, user_id, created_at, updated_at) FROM stdin;
    public       
   aerducfulj    false    230   ��       �          0    43423    testimonials 
   TABLE DATA           X   COPY public.testimonials (id, description, user_id, created_at, updated_at) FROM stdin;
    public       
   aerducfulj    false    250   ��       �          0    43409    type_services 
   TABLE DATA           o   COPY public.type_services (id, icon, title, short_description, service_id, created_at, updated_at) FROM stdin;
    public       
   aerducfulj    false    248   ��       �          0    43206    users 
   TABLE DATA           �   COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at, facebook_id, google_id, github_id) FROM stdin;
    public       
   aerducfulj    false    217   ��       �           0    0    abouts_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.abouts_id_seq', 1, true);
          public       
   aerducfulj    false    225            �           0    0    contacts_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.contacts_id_seq', 2, true);
          public       
   aerducfulj    false    253            �           0    0    education_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.education_id_seq', 12, true);
          public       
   aerducfulj    false    233            �           0    0    emails_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.emails_id_seq', 1, false);
          public       
   aerducfulj    false    255            �           0    0    facts_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.facts_id_seq', 4, true);
          public       
   aerducfulj    false    227                        0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public       
   aerducfulj    false    219                       0    0    images_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.images_id_seq', 1, false);
          public       
   aerducfulj    false    243                       0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 68, true);
          public       
   aerducfulj    false    214                       0    0    personal_access_tokens_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);
          public       
   aerducfulj    false    221                       0    0    personal_references_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.personal_references_id_seq', 1, false);
          public       
   aerducfulj    false    251                       0    0    portfolios_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.portfolios_id_seq', 1, true);
          public       
   aerducfulj    false    237                       0    0    professional_experiences_id_seq    SEQUENCE SET     M   SELECT pg_catalog.setval('public.professional_experiences_id_seq', 1, true);
          public       
   aerducfulj    false    235                       0    0    profiles_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.profiles_id_seq', 1, true);
          public       
   aerducfulj    false    223                       0    0    project_categories_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.project_categories_id_seq', 3, true);
          public       
   aerducfulj    false    239            	           0    0    projects_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.projects_id_seq', 1, true);
          public       
   aerducfulj    false    241            
           0    0    resumes_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.resumes_id_seq', 1, true);
          public       
   aerducfulj    false    231                       0    0    services_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.services_id_seq', 1, true);
          public       
   aerducfulj    false    245                       0    0    skills_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.skills_id_seq', 6, true);
          public       
   aerducfulj    false    229                       0    0    testimonials_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.testimonials_id_seq', 1, true);
          public       
   aerducfulj    false    249                       0    0    type_services_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.type_services_id_seq', 1, false);
          public       
   aerducfulj    false    247                       0    0    users_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.users_id_seq', 1, true);
          public       
   aerducfulj    false    216            �           2606    43266    abouts abouts_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.abouts
    ADD CONSTRAINT abouts_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.abouts DROP CONSTRAINT abouts_pkey;
       public         
   aerducfulj    false    226                       2606    43458    contacts contacts_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.contacts
    ADD CONSTRAINT contacts_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.contacts DROP CONSTRAINT contacts_pkey;
       public         
   aerducfulj    false    254                        2606    43320    education education_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.education
    ADD CONSTRAINT education_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.education DROP CONSTRAINT education_pkey;
       public         
   aerducfulj    false    234                       2606    43472    emails emails_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.emails
    ADD CONSTRAINT emails_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.emails DROP CONSTRAINT emails_pkey;
       public         
   aerducfulj    false    256            �           2606    43278    facts facts_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.facts
    ADD CONSTRAINT facts_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.facts DROP CONSTRAINT facts_pkey;
       public         
   aerducfulj    false    228            �           2606    43229    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public         
   aerducfulj    false    220            �           2606    43231 #   failed_jobs failed_jobs_uuid_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);
 M   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_uuid_unique;
       public         
   aerducfulj    false    220            
           2606    43388    images images_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.images
    ADD CONSTRAINT images_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.images DROP CONSTRAINT images_pkey;
       public         
   aerducfulj    false    244            �           2606    42923    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public         
   aerducfulj    false    215            �           2606    43240 2   personal_access_tokens personal_access_tokens_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_pkey;
       public         
   aerducfulj    false    222            �           2606    43243 :   personal_access_tokens personal_access_tokens_token_unique 
   CONSTRAINT     v   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);
 d   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_token_unique;
       public         
   aerducfulj    false    222                       2606    43444 ,   personal_references personal_references_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.personal_references
    ADD CONSTRAINT personal_references_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.personal_references DROP CONSTRAINT personal_references_pkey;
       public         
   aerducfulj    false    252                       2606    43348    portfolios portfolios_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.portfolios
    ADD CONSTRAINT portfolios_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.portfolios DROP CONSTRAINT portfolios_pkey;
       public         
   aerducfulj    false    238                       2606    43334 6   professional_experiences professional_experiences_pkey 
   CONSTRAINT     t   ALTER TABLE ONLY public.professional_experiences
    ADD CONSTRAINT professional_experiences_pkey PRIMARY KEY (id);
 `   ALTER TABLE ONLY public.professional_experiences DROP CONSTRAINT professional_experiences_pkey;
       public         
   aerducfulj    false    236            �           2606    43252    profiles profiles_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.profiles
    ADD CONSTRAINT profiles_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.profiles DROP CONSTRAINT profiles_pkey;
       public         
   aerducfulj    false    224                       2606    43360 *   project_categories project_categories_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.project_categories
    ADD CONSTRAINT project_categories_pkey PRIMARY KEY (id);
 T   ALTER TABLE ONLY public.project_categories DROP CONSTRAINT project_categories_pkey;
       public         
   aerducfulj    false    240                       2606    43369    projects projects_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.projects
    ADD CONSTRAINT projects_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.projects DROP CONSTRAINT projects_pkey;
       public         
   aerducfulj    false    242            �           2606    43304    resumes resumes_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.resumes
    ADD CONSTRAINT resumes_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.resumes DROP CONSTRAINT resumes_pkey;
       public         
   aerducfulj    false    232                       2606    43402    services services_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.services
    ADD CONSTRAINT services_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.services DROP CONSTRAINT services_pkey;
       public         
   aerducfulj    false    246            �           2606    43290    skills skills_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.skills
    ADD CONSTRAINT skills_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.skills DROP CONSTRAINT skills_pkey;
       public         
   aerducfulj    false    230                       2606    43430    testimonials testimonials_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.testimonials
    ADD CONSTRAINT testimonials_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.testimonials DROP CONSTRAINT testimonials_pkey;
       public         
   aerducfulj    false    250                       2606    43416     type_services type_services_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.type_services
    ADD CONSTRAINT type_services_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.type_services DROP CONSTRAINT type_services_pkey;
       public         
   aerducfulj    false    248            �           2606    43215    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public         
   aerducfulj    false    217            �           2606    43213    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public         
   aerducfulj    false    217            �           1259    43219    password_resets_email_index    INDEX     X   CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);
 /   DROP INDEX public.password_resets_email_index;
       public         
   aerducfulj    false    218            �           1259    43241 8   personal_access_tokens_tokenable_type_tokenable_id_index    INDEX     �   CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);
 L   DROP INDEX public.personal_access_tokens_tokenable_type_tokenable_id_index;
       public         
   aerducfulj    false    222    222                       2606    43267    abouts abouts_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.abouts
    ADD CONSTRAINT abouts_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id) ON UPDATE CASCADE ON DELETE CASCADE;
 G   ALTER TABLE ONLY public.abouts DROP CONSTRAINT abouts_user_id_foreign;
       public       
   aerducfulj    false    217    3306    226            &           2606    43459 !   contacts contacts_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.contacts
    ADD CONSTRAINT contacts_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id) ON UPDATE CASCADE ON DELETE CASCADE;
 K   ALTER TABLE ONLY public.contacts DROP CONSTRAINT contacts_user_id_foreign;
       public       
   aerducfulj    false    3306    254    217                       2606    43321 #   education education_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.education
    ADD CONSTRAINT education_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id) ON UPDATE CASCADE ON DELETE CASCADE;
 M   ALTER TABLE ONLY public.education DROP CONSTRAINT education_user_id_foreign;
       public       
   aerducfulj    false    217    234    3306                       2606    43279    facts facts_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.facts
    ADD CONSTRAINT facts_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id) ON UPDATE CASCADE ON DELETE CASCADE;
 E   ALTER TABLE ONLY public.facts DROP CONSTRAINT facts_user_id_foreign;
       public       
   aerducfulj    false    3306    217    228            !           2606    43389    images images_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.images
    ADD CONSTRAINT images_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id) ON UPDATE CASCADE ON DELETE CASCADE;
 G   ALTER TABLE ONLY public.images DROP CONSTRAINT images_user_id_foreign;
       public       
   aerducfulj    false    3306    244    217            %           2606    43445 >   personal_references personal_references_testimonial_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.personal_references
    ADD CONSTRAINT personal_references_testimonial_id_foreign FOREIGN KEY (testimonial_id) REFERENCES public.testimonials(id) ON UPDATE CASCADE ON DELETE CASCADE;
 h   ALTER TABLE ONLY public.personal_references DROP CONSTRAINT personal_references_testimonial_id_foreign;
       public       
   aerducfulj    false    252    3344    250                       2606    43349 %   portfolios portfolios_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.portfolios
    ADD CONSTRAINT portfolios_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id) ON UPDATE CASCADE ON DELETE CASCADE;
 O   ALTER TABLE ONLY public.portfolios DROP CONSTRAINT portfolios_user_id_foreign;
       public       
   aerducfulj    false    238    217    3306                       2606    43335 A   professional_experiences professional_experiences_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.professional_experiences
    ADD CONSTRAINT professional_experiences_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id) ON UPDATE CASCADE ON DELETE CASCADE;
 k   ALTER TABLE ONLY public.professional_experiences DROP CONSTRAINT professional_experiences_user_id_foreign;
       public       
   aerducfulj    false    217    236    3306                       2606    43253 !   profiles profiles_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.profiles
    ADD CONSTRAINT profiles_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id) ON UPDATE CASCADE ON DELETE CASCADE;
 K   ALTER TABLE ONLY public.profiles DROP CONSTRAINT profiles_user_id_foreign;
       public       
   aerducfulj    false    3306    224    217                       2606    43375 %   projects projects_category_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.projects
    ADD CONSTRAINT projects_category_id_foreign FOREIGN KEY (category_id) REFERENCES public.project_categories(id) ON UPDATE CASCADE ON DELETE CASCADE;
 O   ALTER TABLE ONLY public.projects DROP CONSTRAINT projects_category_id_foreign;
       public       
   aerducfulj    false    240    3334    242                        2606    43370 &   projects projects_portfolio_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.projects
    ADD CONSTRAINT projects_portfolio_id_foreign FOREIGN KEY (portfolio_id) REFERENCES public.portfolios(id) ON UPDATE CASCADE ON DELETE CASCADE;
 P   ALTER TABLE ONLY public.projects DROP CONSTRAINT projects_portfolio_id_foreign;
       public       
   aerducfulj    false    242    3332    238                       2606    43305    resumes resumes_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.resumes
    ADD CONSTRAINT resumes_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id) ON UPDATE CASCADE ON DELETE CASCADE;
 I   ALTER TABLE ONLY public.resumes DROP CONSTRAINT resumes_user_id_foreign;
       public       
   aerducfulj    false    217    3306    232            "           2606    43403 !   services services_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.services
    ADD CONSTRAINT services_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id) ON UPDATE CASCADE ON DELETE CASCADE;
 K   ALTER TABLE ONLY public.services DROP CONSTRAINT services_user_id_foreign;
       public       
   aerducfulj    false    246    3306    217                       2606    43291    skills skills_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.skills
    ADD CONSTRAINT skills_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id) ON UPDATE CASCADE ON DELETE CASCADE;
 G   ALTER TABLE ONLY public.skills DROP CONSTRAINT skills_user_id_foreign;
       public       
   aerducfulj    false    217    3306    230            $           2606    43431 )   testimonials testimonials_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.testimonials
    ADD CONSTRAINT testimonials_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id) ON UPDATE CASCADE ON DELETE CASCADE;
 S   ALTER TABLE ONLY public.testimonials DROP CONSTRAINT testimonials_user_id_foreign;
       public       
   aerducfulj    false    250    3306    217            #           2606    43417 .   type_services type_services_service_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.type_services
    ADD CONSTRAINT type_services_service_id_foreign FOREIGN KEY (service_id) REFERENCES public.services(id) ON UPDATE CASCADE ON DELETE CASCADE;
 X   ALTER TABLE ONLY public.type_services DROP CONSTRAINT type_services_service_id_foreign;
       public       
   aerducfulj    false    246    248    3340            �   �  x�]TMs�0=�_����@n�)�$�L.�y�ے+�f���&r�X���}��[��L[L`�H��BU%JBBx��6���5HfE�>�N*�� �	�a�Ti�kr�*��w'  �jG��R���T�	!���Bno��]��5(��j�j����L����*�6�*�3�H�P����%��Y�$��N��ὦ��D����5a��+~�y&,r[k�x����>Dr[L��'l]7���K`�2���	mP�0 m��Z�C�ĕUU!8Y��i!����̬e<7]sW�Ak	�٪Bi2�ږ�Bi+$�!�f(��THa2�t:�pS(����8���Q����Ԓ�sl��R���8v��Ƚt�D�0%ɶ�����̖����↲^*�͍4� �QC)) h��;]��bԍ�x��e�J�}=��`:���A0�2k+ssyY���I�K��d����tӟ0�La���S-��(@$c�ʪ�H�n:v��Ue ����I5$C�Ƚ���*=���1�������=�'�~(έy�xuX�[��.�4ԃ�.��d�abw��(�]hK��2�!���2vK��x<�;�P�ih�[�n18��@��c�]��0���a��,`
��'4M�c1������$U����n�/�k�Ñ�Bu����)2������/��=�8�W�A8�pt^�׽�a���tG�u      �   �   x�M�K�� ��z
a/��A���-�j�b��~�t&�EU������(��<�iRJd�~v@&�5�x��'؏�iۘ�K��׊^��SZ�^q��h�u�I+E�j���)��g"��[�9��j_L��7�xD�#��0����^w\ʞ�N!���UZ���(��뼜�2C</?}�n��9�^���) ����Ѯ�l��/\xA���2x���T������a�P�ߟ�r eY� \�      �   d   x�34���KWHIU�,.I�M,�4200�50�502�tt�8�2�s2�S�9CC�8��3�+�1t�4C4)Y��X�Z���Zq��qqq ���      �      x������ � �      �   �   x�m��N�0@��W�ԩA�m	����<��\�Kd��,�T��C�ݽ��=�ȼ0Zx�]�\�',�x8�n�mZ�h��t�t��S&�>s)� �	S*8I��װ���(^���Ι
��q%aϗ��3�S<U��z�#�X9R�'pc���u�/!z�	����ǫ{{��IJ���=��q�I�m��-�>�R��Xj      �      x������ � �      �      x������ � �      �   .  x����� �o�b���]*!b��]Ǭl���w�t�9j��V�����q� 3��̰8��V��&�����$T��J�i��WXF���ł�v�7L��Y1�'7��p.����ȇR*&�v2v�JL�ps���rj�h4�	��%\(YK���@�4Ou�s؊$dig���[J%�JM0I�~�i*�"K�˰���F���Ze��\��_Z7n��>�Y�IM-���(�@���)��4P��L�2�=��x	���+� h�]����Py�(Q��
S\b��V��Y�e����k�R9���� r�O_��P�%�$�>�y�4 �EZotk��0{[,E��\O2��.n���y�V�ajys�L���M�a��$?�|uf���{�:,��a��:U���E�֤�518�W1��E]G��;��Q^��*�b:�����RŲTP~Dё���ir��+cu�(h�N�#�L]�Ң?B휕�(�|V��dr�a���6����=��R-�O�r0�*�D�HF/;�f�'`�n���\OJW%���c����|D�;�N�Q<�      �      x������ � �      �      x������ � �      �      x������ � �      �      x�3���41~\1z\\\ !%7      �   Y   x�3�t-.HM�L��,.Q��SpI-�4202�54�501Mu�t�9K3K�9������Ŝ`Ic]C]c##+3+Clb\1z\\\ �0�      �   �  x�u��n�@���S�#�^����Θ�q���?)R�,l���ׯ�G�e�E�^�f4G�#���*V ����
sQ����Y�^t�������/���ra�<����y]����-��3e�*v2���k^�g�|���a�V�������{�N�?{���W���}�Ok!+Ȅ�rl���E���A���_����+�/�<:!��q��o���~�YE&kYt5Sd1�NP�	�cڬ[a��UB���@����M�@�c��:�BA�4X*��S"c��\�TFH0�%S�.b�Ÿ@	z�&b)���&�\����[F&��͍�k���z���$�1���)�҈#5#enK��JԤ�S�����?��������j�\���e:������      �   J   x�3�OM�4202�54�56P02�25�21�&�e�雟����)ij�M�˘�%�8�$� ]�����W� �      �   i   x�3�,*-�+N-J�/�K�O�KM�t,(PpJ,NMQ��S��L.�ʗe&�s�*4202�5"Ό���b+}}��9����L��@���������W� �")0      �   S   x�3�t��-(-IUNM.-*ɬ�.�M,��t,SpO�I��L,V�T�M,*I�4�4202�54�56P02�26�2��&����� ,�*      �      x�3���41~\1z\\\ !%7      �   �   x�u��
�0 ϻ_��B+�WC{�"*��\�����R�����u``FC<F[k�-)c:K��C�7��Ѳ$1���Ǉˊ����yX��>�J8��2�HC��X#�9��j�4?O�:���ĕJ�K�pٮ�8!ŵx�!�_cG[      �      x�3���41~\1z\\\ !%7      �      x������ � �      �   �   x�3���+�L��WpIU���/�,�
��� �鹉�9z����1~�*F�*�*eY�����9�����e�>�Y��f!�n���!�f�N�Q���e�Q��� �FFƺ���
FFV��V�fXŀJ��+F��� ��.C     