package dio.diospringsecurity.model;

import org.springframework.stereotype.Component;

import javax.persistence.*;
import java.util.ArrayList;
import java.util.List;

@Component
@Entity
@Table(name = "tab_user")
public class User {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "id_user")
    private Integer id;
    @Column(length = 50, nullable = false)
    private String name;
    @Column(length = 20, nullable = false)
    private String username;
    @Column(length = 100, nullable = false)
    private String passsword;

    @ElementCollection(fetch = FetchType.EAGER)
    @CollectionTable(name = "tab_user_roule", joinColumns = @JoinColumn(name = "user_id"))
    @Column(name = "role_id")
    private List<String> role = new ArrayList<>();

    public User(){}

    public User(String username){
        this.username=username;
    }

    // Getters
    public Integer getId() {
        return id;
    }

    public String getName() {
        return name;
    }

    public String getUsername() {
        return username;
    }

    public String getPasssword() {
        return passsword;
    }

    public List<String> getRoles() {
        return this.role;
    }

    // Setters

    public void setName(String name) {
        this.name = name;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public void setPasssword(String passsword) {
        this.passsword = passsword;
    }

    public void setRoles(String role) {
        this.getRoles().add(role);
    }
}
