require "csv"
require "code-assertions"
include CodeAssertions

assert { FileTest.directory?(ARGV[0]) }
assert { FileTest.directory?(ARGV[0] + "/in") }
assert { FileTest.exist?(ARGV[0] + "/in/main.csv") }
assert { FileTest.exist?(ARGV[0] + "/in/bib.csv") }

Dir.chdir(ARGV[0]) do
    data = nil
    CSV.parse(File.read("in/main.csv"), headers: true, col_sep: ",") do |row|
        data = row
    end

    bib = []
    CSV.parse(File.read("in/bib.csv"), headers: true, col_sep: ",") do |row|
        bib << row
    end
    puts "---"
    puts "title: #{data["title"]}"
    puts "metadata:"
    puts "\tdescription: #{data["description"].to_s}"
    puts "\tog:image: TBD"
    puts "\timage: TBD"

    puts "date: " + Time.now.strftime("%d-%m-%Y")

    puts "taxonomy:"
    puts "\ttag: [#{data["argList"]}]"
    puts "\tchar: [#{data["charList"]}]"
    puts "\tauthor: #{data["contributor"]}"
    puts "\tdate: #{data["date"]}"
    puts "\tchronology: #{data["chronology"]}"
    puts "\tbibliography:"
    bib.each do |item|
        puts "\t-"
        puts "\t    Categoria: "          + item['type'].to_s
        puts "\t    Tipologia: "          + item['subType'].to_s
        puts "\t    Autore: "             + item['author'].to_s
        puts "\t    Destinatario: "       + item['addressee'].to_s
        puts "\t    Titolo: "             + item['title'].to_s
        puts "\t    Curatori volume: "    + item['editorList'].to_s
        puts "\t    Titolo volume: "      + item['titleVolume'].to_s
        puts "\t    Rivista: "            + item['journal'].to_s
        puts "\t    Parte e volume: "     + item['partANDvol'].to_s
        puts "\t    Luogo: "              + item['place'].to_s
        puts "\t    Editore: "            + item['publisher'].to_s
        puts "\t    Data: "               + item['date'].to_s
        puts "\t    Pagine: "             + item['pages'].to_s
        puts "\t    Link: "               + item['link'].to_s
    end

    puts ""
    puts "---"
    puts ""
    puts data["content"].to_s
end
