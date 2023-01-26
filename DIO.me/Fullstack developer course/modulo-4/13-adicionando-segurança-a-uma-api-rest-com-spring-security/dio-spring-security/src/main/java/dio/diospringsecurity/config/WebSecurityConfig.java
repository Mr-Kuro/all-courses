package dio.diospringsecurity.config;


//import org.springframework.context.annotation.Bean;
import dio.diospringsecurity.config.SecurityDataBaseService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.Configuration;
import org.springframework.http.HttpMethod;
import org.springframework.security.config.annotation.authentication.builders.AuthenticationManagerBuilder;
import org.springframework.security.config.annotation.method.configuration.EnableGlobalMethodSecurity;
import org.springframework.security.config.annotation.web.builders.HttpSecurity;
import org.springframework.security.config.annotation.web.configuration.EnableWebSecurity;
import org.springframework.security.config.annotation.web.configuration.WebSecurityConfigurerAdapter;
import org.springframework.security.crypto.password.NoOpPasswordEncoder;
//import org.springframework.security.core.userdetails.User;
//import org.springframework.security.core.userdetails.UserDetails;
//import org.springframework.security.provisioning.InMemoryUserDetailsManager;


//@Configuration
//@EnableWebSecurity
//@EnableGlobalMethodSecurity(prePostEnabled = true)
//public class WebSecurityConfig {

//    @Bean
//    public InMemoryUserDetailsManager userDetailsService() {
//
//        UserDetails user = User.withDefaultPasswordEncoder()
//                .username("kuro")
//                .password("1234")
//                .roles("USER")
//                .build();
//        return new InMemoryUserDetailsManager(user);
//    }
//}


@Configuration
@EnableWebSecurity
@EnableGlobalMethodSecurity(prePostEnabled = true)
public class WebSecurityConfig extends WebSecurityConfigurerAdapter {

    
    @Autowired
    private SecurityDataBaseService securityService;

    @Autowired
    private void globalUSerDetails(AuthenticationManagerBuilder auth) throws Exception{
        auth.userDetailsService(securityService).passwordEncoder(NoOpPasswordEncoder.getInstance());
    }

    @Override
    protected void configure(HttpSecurity http) throws Exception{
        http.authorizeRequests()
                .antMatchers("/").permitAll()
                .antMatchers(HttpMethod.POST, "login").permitAll()
                .antMatchers("managers").hasRole("MANAGER")
                .antMatchers("users").hasAnyRole("USER", "MANAGER")
                .anyRequest().authenticated().and().httpBasic();
    }
/*
    @Override
    protected void configure(AuthenticationManagerBuilder auth) throws Exception {
        UserDetails user1 = User.withDefaultPasswordEncoder()
                .username("user1")
                .password("1234")
                .roles("user")
                .build();
        auth.inMemoryAuthentication()
                .withUser(user1);

        UserDetails user2 = User.withDefaultPasswordEncoder()
                .username("kuro")
                .password("1234")
                .roles("manager")
                .build();
        auth.inMemoryAuthentication()
                .withUser(user2);

        auth.inMemoryAuthentication()
                .withUser("user2")
                .password("1234")
                .roles("user")
                .and()
                .withUser("admin")
                .password("{noop}1234")
                .roles("manager");
    }
*/
}