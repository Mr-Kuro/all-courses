package dio.diospringsecurity.repository;

import dio.diospringsecurity.model.User;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;

import java.util.Optional;

public interface UserRepository extends JpaRepository<User, Integer> {
//    @Query("SELECT u FROM User u JOIN FETCH u.roles WHERE u.username = (:username)")
    @Query(value = "SELECT * FROM api_spring_security.tab_user JOIN api_spring_security.tab_user_roule WHERE  username = :username", nativeQuery = true)
    User findByUsername(@Param("username") String username);

}
