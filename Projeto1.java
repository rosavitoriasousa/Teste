import java.util.Scanner;
public class Projeto 1 {
public static void main(String args[]) {
Scanner leitor = new Scanner(System.in);
System.out.println("Digite um valor");
String nuns = leitor.nextLine();

int unidade = Integer.parseInt(String.valueOf(nuns.charAt(0)));
//System.out.println(unidade);
int dezena = Integer.parseInt(String.valueOf(nuns.charAt(0)));
//System.out.println(dezena);
int centena = Integer.parseInt(String.valueOf(nuns.charAt(0)));
//System.out.println(centena);

String[] uni = {"zero", "um", "dois", "três", "quatro", "cinco", "seis", "sete", "oito", "nove"};
String[] deze = {"dez", "onze", "doze", "treze", "catorze", "quinze", "dezesseis", "dezessete",
"dezoito", "dezenove", "vinte", "trinta", "quarenta", "cinquenta", "sessenta", "setenta", "oitenta", "noventa"};
String[] cen = {"cento", "duzentos", "trezentos", "quatrocentos", "quinhentos", "seiscentos", "setecentos", "oitcentos", "novecentos"};

System.out.println("Número: " + uni[unidade]);
System.out.println("Número: " + deze[dezena]);
System.out.println("Número: " + cen[centena]); 
}

