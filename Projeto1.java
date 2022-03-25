import java.util.Scanner;
public class MyClass {
    // retorna o numero por extenso, precisa do seu valor, numero de casas e alguma exceção
    public static String extenso2(int num, int casa, int exc){ 
        
        String[][][] unidade = {
            {{"zero"}, {""}, {""}, {""}}, // 0
            {{"um"}, {"dez", "onze", "doze","treze", "quatorze", "quinze", "dezesseis", "dezesete", "dezoito", "dezenove" }, {"cento", "cem"}, {"mil"}}, // 1
            {{"dois"}, {"vinte"}, {"duzentos"}, {"dois mil"}}, // 2
            {{"três"}, {"trinta"}, {"trezentos"}, {"três mil"}}, // 3
            {{"quatro"}, {"quarenta"}, {"quatrocentos"}, {"quatro mil"}}, // 4
            {{"cinco"}, {"cinquenta"}, {"quinhentos"}, {"cinco mil"}}, // 5
            {{"seis"}, {"sessenta"}, {"seissentos"}, {"seis mil"}}, // 6
            {{"sete"}, {"setenta"}, {"setecentos"}, {"sete mil"}}, // 7
            {{"oito"}, {"oitenta"}, {"oitocentos"}, {"oito mil"}}, // 8
            {{"nove"}, {"noventa"}, {"novecentos"}, {"nove mil"}} // 9
            
        }; // Array Tridimencional com os valores por extenso
        return unidade[num][casa][exc];
    }
    
    public static void main(String args[]) {
        Scanner leitor = new Scanner(System.in);
        System.out.println("Digite um numero");
        String userNum = leitor.nextLine();
        boolean forAtivo = true; // Controla se o For está ativo ou não
        
        if(  strSum(userNum) != Integer.parseInt(String.valueOf(userNum.charAt(0)))  ){ // Verifica se o numero é somente ele e um grupo de zeros, isso serve para identificar o numero "cem"
            for(int i = 0; i < userNum.length() && forAtivo; i++){
                
                int numero = Integer.parseInt(String.valueOf(userNum.charAt(i))); // Numero 
                int desIndex = userNum.length() - i - 1; // Numero de casas
                int exc = 0; // Para os numeros de 11 - 19
                
                
                if(numero == 1 && userNum.length() > 1 && i == userNum.length() - 2){ // Digitar os numeros de 11 - 19
                   exc = Integer.parseInt(String.valueOf(userNum.charAt(i + 1))); // Pega o valor da Unidade
                   forAtivo = false;
                }
                
                if(i != 0 && numero != 0) System.out.print(" e "); // digita " e " se não for a primeira vez do Loop
                System.out.print(numero != 0 ? extenso2(numero, desIndex, exc) : ""); // Digita o valor do numero Ignorando o "0"
            }
        }
            
            
        else // Se o valor for somente ele e um grupod de "0"s, exemplo 0, 20, 900, 9000
            System.out.println(extenso2( 
                Integer.parseInt(String.valueOf(userNum.charAt(0))),
                userNum.length() - 1,
                Integer.parseInt(String.valueOf(userNum.charAt(0))) == 1 && userNum.length() == 3 ? 1 : 0) 
            );
        
    }
    
    // Soma todos os valorse da String passada
    public static int strSum(String val){
        int r = 0;
        for(int i = 0; i < val.length(); i++){
            r += Integer.parseInt(String.valueOf(val.charAt(i)));
        }
        return r;
    }
}
