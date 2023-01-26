package dio.diospringsecurity.init;

import dio.diospringsecurity.model.User;
import dio.diospringsecurity.repository.UserRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.CommandLineRunner;
import org.springframework.stereotype.Component;

@Component
public class StartApplication implements CommandLineRunner {
    @Autowired
    private UserRepository repository;

    @Override
    public void run(String... args) throws Exception {
        User user;

        user = repository.findByUsername("admin");
        System.out.println("\n\n\nuser = " + user +"\n\n\n");

        if (user == null){
            user = new User();
            user.setName("ADMIN");
            user.setUsername("admin");
            user.setPasssword("1234");
            user.getRoles().add("MANAGER");
            repository.save(user);
        }

        user = repository.findByUsername("user");
        System.out.println("\n\n\n\nuser = " + user +"\n\n\n\n");

        if (user == null){
            user = new User();
            user.setName("USER");
            user.setUsername("user");
            user.setPasssword("1234");
            user.setRoles("USER");
            repository.save(user);
            System.out.println("\n\n\n\nuser = " + user +"\n\n\n\n");
        }
    }

}
