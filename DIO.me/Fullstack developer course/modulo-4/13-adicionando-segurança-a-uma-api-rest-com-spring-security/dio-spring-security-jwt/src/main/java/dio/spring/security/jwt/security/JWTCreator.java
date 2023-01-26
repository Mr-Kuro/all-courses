package dio.spring.security.jwt.security;

import java.util.Arrays;
import java.util.Date;
import java.util.List;
import java.util.stream.Collectors;

import io.jsonwebtoken.Claims;
import io.jsonwebtoken.ExpiredJwtException;
import io.jsonwebtoken.Jwts;
import io.jsonwebtoken.MalformedJwtException;
import io.jsonwebtoken.SignatureAlgorithm;
import io.jsonwebtoken.SignatureException;
import io.jsonwebtoken.UnsupportedJwtException;

public class JWTCreator {
    public static final String HEADER_AUTHORIZATION = "Authorization";
    public static final String ROLES_AUTHORITIES = "authorities";

    public static String create(String prefix,String key, JWTObject jwtObject) {
        String token = Jwts.builder()
                .setSubject(jwtObject.getSubject()) // diz quem é que está criando o token
                .setIssuedAt(jwtObject.getIssuedAt()) //data de criação do token
                .setExpiration(jwtObject.getExpiration()) // data de epiração do token
                .claim(ROLES_AUTHORITIES, checkRoles(jwtObject.getRoles()))
                .signWith(SignatureAlgorithm.HS512, key) // como o token está assinado
                .compact(); // Junta todas as informações e encripta/compacta em uma string
        return prefix + " " + token;
    }
    public static JWTObject create(String token,String prefix,String key)
            throws ExpiredJwtException, UnsupportedJwtException, MalformedJwtException, SignatureException {
        JWTObject jwtObject = new JWTObject();
        token = token.replace(prefix, "");
        Claims claims = Jwts.parser().setSigningKey(key).parseClaimsJws(token).getBody();
        jwtObject.setSubject(claims.getSubject());
        jwtObject.setExpiration(claims.getExpiration());
        jwtObject.setIssuedAt(claims.getIssuedAt());
        jwtObject.setRoles((List<String>) claims.get(ROLES_AUTHORITIES));
        return jwtObject;

    }
    private static List<String> checkRoles(List<String> roles) {
        /**
         * @stream(): Considerando uma lista de Clientes List<Cliente> clientes podemos usar Streams para executar
         * várias tarefas que antes precisavam de muito código e que poderiam ser escritas de maneiras distintas. Com
         * Streams essas tarefas ficam mais simples, estruturadas e padronizadas. Vamos conhecer algumas funcionalidades
         * desta API. <a href="https://medium.com/@racc.costa/streams-no-java-8-e-no-java-9-36177c5c3313">link</a>.
         *
         * @map: Um mapa contém valores com base na chave, ou seja, par de chave e valor. Cada par de chave e valor é
         * conhecido como uma entrada. Um mapa contém chaves exclusivas. Um mapa é útil se você precisar pesquisar,
         * atualizar ou excluir elementos com base em uma chave.
         *
         * @Concat(): O método concat() anexa (concatena) uma string ao final de outra string.
         *
         * @replaceAll(): O método substitui cada substring que corresponde ao regex da string com o texto especificado.
         * <a href="https://www.programiz.com/java-programming/library/string/replaceall">link</a>
         * */
        return roles.stream().map(str -> "ROLE_".concat(str.replaceAll("ROLE_",""))).collect(Collectors.toList());
    }


}


// anotações
    // JWT - Jason Web Token
    // há a parte de autenticação e a parte de criação do token

    // passos
        //add jwt dependency in pom.xml
        //
        // creat class token service for Creat and Return of a the token