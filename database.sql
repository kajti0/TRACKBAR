create table tasks
(
    id            serial
        primary key,
    title         varchar(100) not null,
    description   text,
    created_at    timestamp default CURRENT_TIMESTAMP,
    due_at        date         not null,
    id_created_by integer      not null
        constraint fk_tasks_users
            references users
            on update cascade on delete cascade
);

create table user_details
(
    id           serial
        primary key,
    first_name   varchar(255) not null,
    last_name    varchar(255) not null,
    phone_number varchar(20)  not null
);


create table users
(
    id              serial
        primary key,
    email           varchar(255) not null,
    password        varchar(255) not null,
    id_user_details integer
        references user_details
            on update cascade on delete cascade
);

create table users_tasks
(
    id_user integer not null
        constraint fk_user_tasks_users
            references users
            on update cascade on delete cascade,
    id_task integer not null
        constraint tasks_users_tasks__fk
            references tasks
            on update cascade on delete cascade
);