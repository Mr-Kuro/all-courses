package dio.diospringsecurity.controller;

import org.springframework.security.access.prepost.PreAuthorize;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping("/api") // pondto de acesso da api a partir do localhost

public class WelcomeController {
    @GetMapping
    public String welcome(){
        return "Welcome to my Spring Boot Web API";
    }

    @GetMapping("/users")
/*
    @PreAuthorize("hasAnyRole('manager', 'user')")
*/
    public  String us3ers(){
        return "Authorized user";
    }

    @GetMapping("/managers")
/*
    @PreAuthorize("hasRole('manager')")
*/
    public String managers(){
        return "Authorized manager";
    }
}
