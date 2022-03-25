import java.util.Scanner;
public class MyClass {
        /**
 * @param args os argumentos da linha de comando
     */
 public static void main(String[] args) {
Scanner leitor = new Scanner(System.in);
        System.out.println("Digite um valor:");
        
        int num = leitor.nextInt(); // Pega o primeiro valor digitado
        float result = num; // Define o valor inicial do resultado
        int quantidadeNumeros = 1; // Variável que armazena a quantidade de numeros
        
        while(num > 0){
            System.out.println("Digite outro valor");
            num = leitor.nextInt(); // Atualiza o valor com o novo valor digitado
            if(num < 0) break; // Se o valor digitado for negativo QUEBRA o Loop
            result += num; // Soma o valor guardado com o valor digitado
            quantidadeNumeros++; // Adiciona 1 na quantidade de numeros digitados
        }
        System.out.println("A media foi: " + (result / quantidadeNumeros)); // Faz a formula e Printa o resultado
}
}
