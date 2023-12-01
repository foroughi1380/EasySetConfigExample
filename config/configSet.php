<?php

return [
    "maintenance" => [ // scope
        esconfig_title("zf"), // optional for set title to scope
        esconfig_description(""), // optional for set description to scope
        esconfig_extras([
            "permission" => "ali",
            "asdfasddf" => "asdf"
        ]), // optional , you can set any thins


        "enabled2" => esconfig_property("boolean" , false , "sdff" , ""), // set properties like this

        "text" =>[ // scope
            esconfig_title("ee title boda"), // optional for set title to scope
            //esconfig_description(""), // optional for set description to scope

            "time" => esconfig_property("datetime" , "2024/12/11")
        ]
    ],
];
